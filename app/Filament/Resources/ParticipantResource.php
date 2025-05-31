<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParticipantResource\Pages;
use App\Filament\Resources\ParticipantResource\RelationManagers;
use App\Models\Participant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Support\RawJs;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ParticipantResource extends Resource
{
    protected static ?string $model = Participant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Fieldset::make('Participant Name')
                    ->schema([
                        TextInput::make('first_name')
                            ->required(),
                        TextInput::make('last_name')
                            ->required(),
                        Select::make('gender')->options([
                            'man' => 'Чоловік',
                            'woman' => 'Жінка',
                        ]),
                        DatePicker::make('birth_date'),
                    ])
                    ->columns(4),

                Fieldset::make('Participant Contact')
                    ->schema([
                        TextInput::make('city'),
                        TextInput::make('email')->email(),
                        TextInput::make('phone')->tel(),
                        TextInput::make('contact')
                        ->label(__('Contact Person')),
                    ])
                    ->columns(4),

                Fieldset::make('Participant Info')
                    ->schema([
                        TextInput::make('team'),
                        TextInput::make('club'),
                    ])
                    ->columns(4),

                Fieldset::make('Race information')
                    ->schema([
                        TextInput::make('part_id')
                            ->label(__('Participant ID'))
                            ->required(),
                        TextInput::make('start_number')
                            ->numeric()
                            ->inputMode('decimal'),
                        TextInput::make('distance')
                            ->datalist([
                                '5км',
                                '10км',
                                '25км',
                            ]),
                        TextInput::make('tshirt_size')
                            ->datalist([
                                'S',
                                'M',
                                'L',
                                'XL',
                                '2XL',
                                '3XL'
                            ])
                            ->label(__('T-shirt Size')),
                        DatePicker::make('date2')
                            ->label(__('Race Date')),
                        TextInput::make('status'),
                    ])
                    ->columns(3),

                TextInput::make('transaction'),
                TextInput::make('price')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric(),

                TextInput::make('promo_code')
                    ->length(8),
                TextInput::make('promo_price')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->searchable(),
                TextColumn::make('distance'),
                TextColumn::make('start_number'),
                TextColumn::make('first_name'),
                TextColumn::make('last_name'),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('gender'),
                TextColumn::make('birth_date'),
                TextColumn::make('team'),
                TextColumn::make('club'),
                TextColumn::make('transaction'),
                TextColumn::make('price'),
                TextColumn::make('status'),
                TextColumn::make('promo_code'),
                TextColumn::make('promo_price')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListParticipants::route('/'),
            'create' => Pages\CreateParticipant::route('/create'),
            'edit' => Pages\EditParticipant::route('/{record}/edit'),
        ];
    }
}

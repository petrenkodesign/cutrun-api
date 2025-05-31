<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('part_id')->nullable();
            $table->string('distance')->nullable();
            $table->integer('start_number')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('date2')->nullable();
            $table->string('city')->nullable();
            $table->string('contact')->nullable();
            $table->string('team')->nullable();
            $table->string('club')->nullable();
            $table->string('tshirt_size')->nullable();
            $table->string('transaction')->nullable();
            $table->integer('price')->nullable();
            $table->string('status')->nullable();
            $table->string('promo_code')->nullable();
            $table->string('promo_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};

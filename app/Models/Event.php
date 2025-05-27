<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'full_description',
        'image_url',
        'event_date',
        'map_link',
        'website_link'
    ];

    protected $casts = [
        'event_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            if (empty($event->slug)) {
                $event->slug = static::createSlug($event->title);
            }
        });
    }

    private static function createSlug($title)
    {
        // Convert to lowercase and replace spaces with underscores
        $slug = Str::of($title)
            ->ascii()
            ->lower()
            ->replace(' ', '_')
            ->replace([',', '.', '!', '?', '"', "'"], '');

        // Check for existing slugs
        $count = 0;
        $originalSlug = $slug;

        // Keep checking until we find a unique slug
        while (static::where('slug', $slug)->exists()) {
            $count++;
            $slug = "{$originalSlug}_{$count}";
        }

        return $slug;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

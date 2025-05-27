@extends('layouts.app')

@section('title', $event->title)

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10 my-8">
    @auth
        @if(auth()->user()->is_admin)
            <div class="flex justify-end mb-4">
                <a href="{{ route('events.edit', $event->slug) }}"
                   class="bg-blue-600 !text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Edit Event
                </a>
            </div>
        @endif
    @endauth

    <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="w-full h-64 object-cover rounded-xl mb-6">
    <h1 class="text-4xl font-bold mb-4">{{ $event->title }}</h1>
    <div class="text-gray-500 mb-4">
        <span>Event date: {{ $event->event_date->format('Y-m-d') }}</span> |
        <span>Added: {{ $event->created_at->format('Y-m-d') }}</span>
        @if($event->map_link)
            | <a href="{{ $event->map_link }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-map-marker-alt"></i> View Map
              </a>
        @endif
        @if($event->website_link)
            | <a href="{{ $event->website_link }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                <i class="fas fa-globe"></i> Visit Website
              </a>
        @endif
    </div>
    <div class="text-lg text-gray-800 mb-8">
        {{ $event->full_description }}
    </div>
    <a href="{{ route('events.index') }}" class="text-blue-600 hover:text-blue-800">← Back to events</a>
</div>
@endsection

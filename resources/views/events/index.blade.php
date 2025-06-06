@extends('layouts.app')

@section('title', 'Events')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-15">
    <div class="flex flex-wrap justify-end items-center mb-8">
        @auth
            @if(auth()->user()->is_admin)
                <a href="{{ route('events.create') }}" class="bg-blue-600 !text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Add Event
                </a>
            @endif
        @endauth
        <h2 class="w-screen text-center">Upcoming Events</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($events as $event)
        <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
            <a href="{{ route('events.show', $event->slug) }}">
                <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="w-full h-48 object-cover">
            </a>
            <div class="p-5 flex-1 flex flex-col">
                <h2 class="text-xl font-semibold mb-2">
                    <a href="{{ route('events.show', $event->slug) }}" class="hover:text-blue-600">
                        {{ $event->title }}
                    </a>
                </h2>
                @if($event->event_date)
                    <p class="text-gray-500 text-sm">Event date: {{ $event->event_date->format('Y-m-d') }}</p>
                @endif
                <p class="text-gray-600 mt-2">{{ $event->short_description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', $event->title)

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="w-full h-64 object-cover rounded-xl mb-6">
    <h1 class="text-4xl font-bold mb-4">{{ $event->title }}</h1>
    <div class="text-gray-500 mb-4">
        <span>Event date: {{ $event->event_date->format('Y-m-d') }}</span> |
        <span>Added: {{ $event->created_at->format('Y-m-d') }}</span>
    </div>
    <div class="text-lg text-gray-800 mb-8">
        {{ $event->full_description }}
    </div>
    <a href="{{ route('events.index') }}" class="text-blue-600 underline">← Back to events</a>
</div>
@endsection

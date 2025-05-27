@extends('layouts.app')

@section('title', 'Create Event')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-8 my-15">
    <h1 class="text-3xl font-bold mb-6">Create New Event</h1>

    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
        </div>

        <div>
            <label for="short_description" class="block text-sm font-medium text-gray-700">Short Description</label>
            <textarea name="short_description" id="short_description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
        </div>

        <div>
            <label for="full_description" class="block text-sm font-medium text-gray-700">Full Description</label>
            <textarea name="full_description" id="full_description" rows="6" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
        </div>

        <div>
            <label for="event_date" class="block text-sm font-medium text-gray-700">Event Date</label>
            <input type="date" name="event_date" id="event_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Event Image</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required>
        </div>

        <div>
            <label for="map_link" class="block text-sm font-medium text-gray-700">Map Link</label>
            <input type="url" name="map_link" id="map_link"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            <p class="mt-1 text-sm text-gray-500">Optional: Add a link to the event map</p>
        </div>

        <div class="mb-6">
            <label for="website_link" class="block text-sm font-medium text-gray-700">Website Link</label>
            <input
                type="url"
                name="website_link"
                id="website_link"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                placeholder="https://example.com"
            >
            <p class="mt-1 text-sm text-gray-500">Optional: Add a link to the event website</p>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Create Event
            </button>
        </div>
    </form>
</div>
@endsection
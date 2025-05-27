@extends('layouts.app')

@section('title', 'Edit Event - ' . $event->title)

@section('content')
<div class="max-w-2xl mx-auto px-4 py-8 my-10">
    <h1 class="text-3xl font-bold mb-6">Edit Event</h1>

    <form action="{{ route('events.update', $event->slug) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $event->title) }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
        </div>

        <div>
            <label for="short_description" class="block text-sm font-medium text-gray-700">Short Description</label>
            <textarea name="short_description" id="short_description" rows="3"
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ old('short_description', $event->short_description) }}</textarea>
        </div>

        <div>
            <label for="full_description" class="block text-sm font-medium text-gray-700">Full Description</label>
            <textarea name="full_description" id="full_description" rows="6"
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ old('full_description', $event->full_description) }}</textarea>
        </div>

        <div>
            <label for="event_date" class="block text-sm font-medium text-gray-700">Event Date</label>
            <input type="date" name="event_date" id="event_date"
                   value="{{ old('event_date', $event->event_date->format('Y-m-d')) }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
        </div>

        <div>
            <label for="map_link" class="block text-sm font-medium text-gray-700">Map Link</label>
            <input type="url" name="map_link" id="map_link" value="{{ old('map_link', $event->map_link) }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <div>
            <label for="website_link" class="block text-sm font-medium text-gray-700">Website Link</label>
            <input type="url" name="website_link" id="website_link" value="{{ old('website_link', $event->website_link) }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Event Image</label>
            <input type="file" name="image" id="image"
                   class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            <p class="mt-1 text-sm text-gray-500">Leave empty to keep current image</p>
            @if($event->image_url)
                <img src="{{ $event->image_url }}" alt="Current image" class="mt-2 h-32 object-cover rounded">
            @endif
        </div>

        <div class="flex justify-end gap-4">
            <a href="{{ route('events.show', $event->slug) }}"
               class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                Cancel
            </a>
            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Update Event
            </button>
        </div>
    </form>
</div>
@endsection
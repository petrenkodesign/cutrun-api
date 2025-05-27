<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date', 'desc')->get();
        return view('events.index', compact('events'));
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'required',
            'full_description' => 'required',
            'event_date' => 'required|date',
            'map_link' => 'nullable|url',
            'website_link' => 'nullable|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = $request->file('image')->store('events', 'public');

        Event::create([
            'title' => $validated['title'],
            'short_description' => $validated['short_description'],
            'full_description' => $validated['full_description'],
            'event_date' => $validated['event_date'],
            'map_link' => $validated['map_link'],
            'website_link' => $validated['website_link'],
            'image_url' => '/storage/' . $imagePath
        ]);

        return redirect()->route('events.index')
            ->with('success', 'Event created successfully.');
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'short_description' => 'required',
            'full_description' => 'required',
            'event_date' => 'required|date',
            'map_link' => 'nullable|url',
            'website_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = collect($validated)->except('image')->toArray();

        if ($request->hasFile('image')) {
            // Delete old image
            if ($event->image_url) {
                $oldPath = str_replace('/storage/', '', $event->image_url);
                Storage::disk('public')->delete($oldPath);
            }

            // Store new image
            $imagePath = $request->file('image')->store('events', 'public');
            $data['image_url'] = '/storage/' . $imagePath;
        }

        $event->update($data);

        return redirect()->route('events.show', $event->slug)
            ->with('success', 'Event updated successfully');
    }
}

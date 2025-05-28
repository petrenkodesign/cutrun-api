<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Models\Event;

Route::get('/', function () {
    $events = Event::latest('event_date')
        ->take(3)
        ->get();
    return view('home', compact('events'));
});


// Admin only routes
use App\Http\Middleware\IsAdmin;

Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
});

// Public routes
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');


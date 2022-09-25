<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = (new Event())
            ->newQuery()
            ->paginate(5);

        return view('admin.events.index',[
            'events' => $events
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.form', [
            'event' => new Event(),
            'categories' => (new Category())->where('status', 1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        $validated = $request->validated();

        $event = (new Event())->create([
            'category_id' => $validated['category_id'],
            'name' => $validated['name'],
            'url' => Str::slug($validated['url']),
            'description' => $validated['description'],
            'date' => $validated['date'],
            'time' => $validated['time'],
            'location' => $validated['location'],
            'contact' => $validated['contact'],
            'email' => $validated['email'],
            'link' => $validated['link'],
            'status' => $validated['status'],
        ]);

        // check if the request has categories and sync them
        if ($request->has('categories')) {
            $event->categories()->sync($request->categories);
        }

        if ($request->hasFile('image')) {
            $event->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.events.show', [
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.events.form', [
            'event' => $event,
            'categories' => (new Category())->where('status', 1)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $validated = $request->validated();

        $event->update([
            'category_id' => $validated['category_id'],
            'name' => $validated['name'],
            'url' => Str::slug($validated['url']),
            'description' => $validated['description'],
            'date' => $validated['date'],
            'time' => $validated['time'],
            'location' => $validated['location'],
            'contact' => $validated['contact'],
            'email' => $validated['email'],
            'link' => $validated['link'],
            'status' => $validated['status'],
        ]);

        // check if the request has categories and sync them
        if ($request->has('categories')) {
            $event->categories()->sync($request->categories);
        }

        if ($request->hasFile('image')) {
            $event->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //delete event
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully');
    }
}

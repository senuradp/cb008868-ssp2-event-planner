<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function home(){
        $events = (new Event())
            ->where('status', 1)
            ->orderBy('date', 'asc')
            ->take(10)
            ->get();
        // dd($events);
        return view('events', [
            'events' => $events
        ]);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, string $url)
    {
        // dd($request, $url);
        $event = (new Event())
            ->newQuery()
            ->where('url', $url)
            ->first();

        if (!$event) {
            return abort(404);
        }

        return view('event-details',[
            'event' => $event
        ]);
    }
}

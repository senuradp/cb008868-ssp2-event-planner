<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function home(){
        $events = (new Event())
            ->newQuery()
            ->where('status', 1)
            ->whereDate('date', '=', date('Y-m-d'))
            ->with([
                'categories',
                'media'
            ]);

        // check if the request has a cid column and get the hotels by the category id

        if(request()->has('cid')){
            // create a new query to get the hotels by the category id
            $events->whereHas('categories', function($query){
                $query->where('category_id', request()->get('cid'));
            });
        }

        $events = $events->orderBy('date', 'asc')
            ->take(10)
            ->get();

        // get fututre events where the date is greater than today
        $futureEvents = (new Event())
            ->where('date', '>', date('Y-m-d'))
            ->where('status', 1)
            ->with([
                'categories',
                'media'
            ])
            ->orderBy('date', 'asc')
            ->take(10)
            ->get();


        // dd($events);
       return view('events', [
            'events' => $events,
            'futureEvents' => $futureEvents,
            'categories' => (new Category())
                ->newQuery()
                ->where('status', 1)
                ->get(),
        ]);
    }

    public function future(){
        $events = (new Event())
            ->newQuery()
            ->where('status', 1)
            ->whereDate('date', '>', date('Y-m-d'))
            ->with([
                'categories',
                'media'
            ]);

        // check if the request has a cid column and get the hotels by the category id

        if(request()->has('cid')){
            // create a new query to get the hotels by the category id
            $events->whereHas('categories', function($query){
                $query->where('category_id', request()->get('cid'));
            });
        }

        $events = $events->orderBy('date', 'asc')
            ->take(10)
            ->get();

        // dd($events);
       return view('future-events', [
            'events' => $events,
            'categories' => (new Category())
                ->newQuery()
                ->where('status', 1)
                ->get(),
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
            ->with([
                'media',
                'categories',
                'packages',
            ])
            ->first();

        if (!$event) {
            return abort(404);
        }

        // single event page view count
        $event->view_count = $event->view_count + 1;

        $event->save();

        return view('event-details',[
            'event' => $event
        ]);

    }
}

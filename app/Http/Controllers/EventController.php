<?php

namespace App\Http\Controllers;

use App\Models\Auth\User;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function home(){
        $events = (new Event())
            ->newQuery()
            ->where('status', 1)
            // ->whereDate('date', '=', date('Y-m-d'))
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

        $user = (new User())
            ->where('id', auth()->user()->id)
            ->first();

        // dd($events);
        return view('events', [
            'events' => $events,
            'categories' => (new Category())
                ->newQuery()
                ->where('status', 1)
                ->get(),
            'user' => $user,
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

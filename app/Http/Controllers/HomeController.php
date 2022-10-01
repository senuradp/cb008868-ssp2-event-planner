<?php

namespace App\Http\Controllers;

use App\ButtercupEvents;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(ButtercupEvents $buttercupEvents)
    {
        // dd($buttercupEvents);
        resolve('ButtercupEvents')->setUrl('home');
        // return view('home');
        // return to home view with view_count descending order
        $events = (new Event())
                ->newQuery()
                ->where('status', 1)
                ->orderBy('view_count', 'desc')
                ->take(6)
                ->get();

        // dd($events);

        return view('new',[
            'events' => $events
        ]);
    }

}

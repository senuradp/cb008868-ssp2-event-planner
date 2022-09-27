<?php

use App\Models\Event;

if(!function_exists('event_rating')){
    function event_rating(Event $event){
        $rating = $event->bookings()->avg('rating');
        return round($rating,);
    }
}

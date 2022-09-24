<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // List of Events

        // 'category_id',
        // 'name',
        // 'description',
        // 'date',
        // 'time',
        // 'location',
        // 'contact',
        // 'email',
        // 'link',

        $events = [
            [
                'category_id' => 1,
                'name' => 'Event 1',
                'description' => 'Event 1 Description',
                'date' => '2021-01-02',
                'time' => '11:00',
                'location' => 'Location 1',
                'contact' => '0779779574',
                'email' => 'event1@gmail.com',
                'link' => 'https://www.google.com',
                'image' => 'https://www.marinobeach.com/images/slides/h1-slider1.jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Event 2',
                'description' => 'Event 2 Description',
                'date' => '2021-02-02',
                'time' => '12:00',
                'location' => 'Location 2',
                'contact' => '0779779574',
                'email' => 'event2@gmail.com',
                'link' => 'https://www.google.com',
                'image' => 'https://www.marinobeach.com/images/slides/h1-slider1.jpg',
            ],
            [
                'category_id' => 3,
                'name' => 'Event 3',
                'description' => 'Event 3 Description',
                'date' => '2021-03-03',
                'time' => '13:00',
                'location' => 'Location 3',
                'contact' => '0779779574',
                'email' => 'event3@gmail.com',
                'link' => 'https://www.google.com',
                'image' => 'https://granbellhotel.lk/wp-content/uploads/2022/04/Home-Gallery2-1630x1060-1.jpg',
            ],
            [
                'category_id' => 4,
                'name' => 'Event 4',
                'description' => 'Event 4 Description',
                'date' => '2021-04-04',
                'time' => '14:00',
                'location' => 'Location 4',
                'contact' => '0779779574',
                'email' => 'event4@gmail.com',
                'link' => 'https://www.google.com',
                'image' => 'https://granbellhotel.lk/wp-content/uploads/2022/04/Home-Gallery2-1630x1060-1.jpg',
            ]
        ];

        foreach($events as $event){
            $event_model = (new Event())
                ->newQuery()
                ->create([
                    'category_id' => $event['category_id'],
                    'name' => $event['name'],
                    'url' => Str::slug($event['name']),
                    'description' => $event['description'],
                    'date' => $event['date'],
                    'time' => $event['time'],
                    'location' => $event['location'],
                    'contact' => $event['contact'],
                    'email' => $event['email'],
                    'link' => $event['link'],
                    'image' => $event['image'],
                ]);
                $event_model->addMediaFromUrl($event['image'])
                ->toMediaCollection('images');
        }

    }
}

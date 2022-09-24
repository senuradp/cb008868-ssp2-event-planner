<?php

namespace Database\Seeders;

use App\Models\Finance\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample package
        $packages = [
            [
                'event_id' => 1 ,
                'title' => 'Package 1',
                'description' => 'Package 1 Description',
                'price' => 1000,
                'sort_order' => 0,
                'status' => 1,
            ],
            [
                'event_id' => 1 ,
                'title' => 'Package 2',
                'description' => 'Package 2 Description',
                'price' => 2000,
                'sort_order' => 0,
                'status' => 1,
            ],
            [
                'event_id' => 1 ,
                'title' => 'Package 3',
                'description' => 'Package 3 Description',
                'price' => 3000,
                'sort_order' => 0,
                'status' => 1,
            ],
            [
                'event_id' => 2 ,
                'title' => 'Package 1',
                'description' => 'Package 1 Description',
                'price' => 4000,
                'sort_order' => 0,
                'status' => 1,
            ],
            [
                'event_id' => 2 ,
                'title' => 'Package 2',
                'description' => 'Package 2 Description',
                'price' => 5000,
                'sort_order' => 0,
                'status' => 1,
            ],
            [
                'event_id' => 2 ,
                'title' => 'Package 3',
                'description' => 'Package 3 Description',
                'price' => 6000,
                'sort_order' => 0,
                'status' => 1,
            ],
        ];

        foreach($packages as $package){
            $event = (new Package())::create([
                        'event_id' => $package['event_id'],
                        'title' => $package['title'],
                        'description' => $package['description'],
                        'price' => $package['price'],
                        'sort_order' => $package['sort_order'],
                        'status' => $package['status'],
                    ]);
        }

    }
}

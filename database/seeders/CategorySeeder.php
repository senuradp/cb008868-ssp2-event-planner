<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            "Sports",
            "Music",
            "Theatre",
            "Expos",
            "Concerts",
            "Festivals",
            "Conferences",
            "Performing Arts",
            "Family",
            "Comedy",
            "Community",
            "Business",
            "Charity",
            "Education",
            "Holiday",
            "Health & Wellness",
            "Religion & Spirituality",
        ];

        foreach ($category as $key => $category) {
            (new Category())::create([
                'title' => $category,
                'url' => Str::slug($category),
                'summary' => $category,
                'content' => $category,
                'sort_order' => $key,
                'status' => 1,
            ]);
        }

    }
}

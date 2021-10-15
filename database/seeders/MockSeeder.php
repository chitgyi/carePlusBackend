<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Database\Seeder;

class MockSeeder extends Seeder
{
    public function run()
    {
        Category::factory()->count(10)->create();
        Doctor::factory()->count(10)->create();
        Article::factory()->count(10)->create();
        Hospital::factory()->count(10)->create();
    }
}

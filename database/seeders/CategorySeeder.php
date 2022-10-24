<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $categories = ['Adventure', 'Business', 'Comedy','Drama','Education','Horror', 'Politics', 'Religion', 'Romance'];
        foreach ($categories as $category) {
            Category::create([
                'category' => $category,
                'remarks'  => Str::random(9)
            ]);
        }
    }
}

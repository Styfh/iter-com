<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ["Urban", "Countryside", "Cold", "Hot", "Cultural", "Conservation", "National Parks", "Culinary", "Historical", "Religion", "Festivals", "Theme Parks", "Shopping", "Night Life", "Wild Life", "Sports", "Beaches"];
        
        foreach ($categories as $category){
            Category::create([
                "category_name" => $category
            ]);
        }
    }
}

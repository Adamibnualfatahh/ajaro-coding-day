<?php

namespace Database\Seeders;
use App\models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Laptop";
        $category->save();

        $category = new Category();
        $category->name = "Kacang";
        $category->save();

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->id = 1;
        $category->name = "Thể loại 1";
        $category->save();

        $category = new Category();
        $category->id = 2;
        $category->name = "Thể loại 2";
        $category->save();

        $category = new Category();
        $category->id = 3;
        $category->name = "Thể loại 3";
        $category->save();
    }
}

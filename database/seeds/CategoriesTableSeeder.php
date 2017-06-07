<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Category::class,10)->create();

        /*factory(App\Models\Product::class, 10)->create()->each(function ($u) use ($products) {
			$products->category()->save(factory(App\Models\Category::class)->make([
			'category_id' => $u->id
			]));
		});*/
    }
}

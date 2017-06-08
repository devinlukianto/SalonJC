<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(App\Models\News::class, 5)->create()->each(
		    function($news) {
		    	for ($i = 0; $i <= 3; $i++) {
	    			$news->comments()->save(
		            	factory(App\Models\Comment::class)->make()
		        	);
		    	}
		    }
		);
	}
}
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++){
        	
	        DB::table('blogs')->insert([        	
	            'titre' => str_random(10),
	            'texte' => str_random(10),
	        ]);

        }
    }
}
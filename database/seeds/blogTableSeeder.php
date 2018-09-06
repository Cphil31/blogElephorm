<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class blogTableSeeder extends Seeder
{

	private function date aleatoire (){

		return Carbon::createFromDate('null', rand(1,12),rand(1,28));
	}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}

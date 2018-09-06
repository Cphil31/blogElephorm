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
        DB::table('blogs')->delete();

        $faker = Faker\Factory::create();

        for (i=0;i<20;i++) {
        	$date=$this->datealeatoire();
        	DB::table('blogs')->insert([

        	'titre'=> text(),
        	'texte'=> text(),	
        	'created_at'=>$date,
        	'updated_at'=>$date


        	]);
        }
    }
}

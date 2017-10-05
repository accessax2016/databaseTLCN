<?php

use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++)
        {
        	DB::table('answers')->insert(
	        	[
	        		'user_id' => rand(1,10),
	        		'question_id' => rand(1,10),
	        		'content' => 'Nội Dung Answer '.$i.' là gì',
	            	'created_at' => new DateTime(),
                    'updated_at' => new DateTime()
	        	]
        	);
        }
    }
}

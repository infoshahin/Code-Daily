<?php

use Illuminate\Database\Seeder;

class UsertypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('user_type')->truncate();

    	$data = [
    		['title' => 'superadmin'],
    		['title' => 'admin'],
    		['title' => 'client'],
    		['title' => 'merchant'],
    	];

    		DB::table('user_type')->insert($data);
    }
}

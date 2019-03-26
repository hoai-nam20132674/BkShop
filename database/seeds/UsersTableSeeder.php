<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
        		'name' =>'nam',
        		'email' =>'admin@gmail.com',
        		'password'=>Hash::make('111111')
        	]
        	
        	]
        );
    }
}

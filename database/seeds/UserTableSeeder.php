<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            DB::table('users')->insert( array(
                'name'=>'luis',
                'email'=>'ljvr654@gmail.com',
                'password'=>Hash::make('secret')
            ));       
	}//fin de la funcion run 

}//fin de la clase

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
class ProductosTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    
    
	public function run()
	{
            $faker = Faker::create();
            
            for( $i = 0; $i < 20; $i++ ){
                
                DB::table('productos')->insert( array(
                    'nombre'=>$faker->company,  
                    'descripcion'=>$faker->realText( $nextToChars = 50, $indexSize = 2 ),  
                    'categoria'=>'1',
                    'created_at'=>$faker->dateTimeAD($max = 'now') 
                ));               
                
            }//fin del for

	}//fin de la funcion run 

}//fin de la clase

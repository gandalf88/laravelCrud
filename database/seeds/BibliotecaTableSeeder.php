<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class BibliotecaTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            
            $faker = Faker::create();
            
            for( $i = 0; $i < 20; $i++ )
            {
                DB::table('recurso')->insert( array(
                    'ISBN'=>$faker->unique()->randomNumber,
                    'titulo'=>$faker->title,                  
                    'resumen'=>$faker->realText( $nextToChars = 50, $indexSize = 2 ),                    
                    'totalPaginas'=>$faker->numberBetween( $min = 100, $max = 900 ),                    
                    'tipoLibro'=>'cientifico',
                    'revista'=>'venciencas',                  
                    'monografia'=>'investigación',                    
                    'codEditorial'=>'123'
                ));
            }//fin del for
                
            DB::table('editorial')->insert( array(
                    'codigo'=>'123',
                    'nombreEditorial'=>'norma'
            ));     
            DB::table('editorial')->insert( array(
                    'codigo'=>'126',
                    'nombreEditorial'=>'santillana'
            ));                        
        }//fin del metodo run
}//fin de la clase

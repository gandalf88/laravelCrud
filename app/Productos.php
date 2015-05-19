<?php namespace crud;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model {

	protected $table = 'productos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'descripcion', 'categoria'];
	
}//fin de la clase Productos 



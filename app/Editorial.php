<?php namespace crud;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model {

	protected $table = 'editorial';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['codigo', 'nombreEditorial', 
            'created_at', 'updated_at'];
	
}//fin de la clase Productos 





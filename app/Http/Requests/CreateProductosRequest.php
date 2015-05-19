<?php namespace crud\Http\Requests;

use crud\Http\Requests\Request;

class CreateProductosRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
            return [
                'nombre'=>'required|unique:productos,nombre',
                'descripcion'=>'required',
                'categoria'=>'required',                  
            ];
	}

}

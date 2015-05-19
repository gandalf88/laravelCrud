<?php namespace crud\Http\Requests;

use crud\Http\Requests\Request;

class EditRecursoRequest extends Request {

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
                    'ISBN'=>'required',
                    'titulo'=>'required',
                    'resumen'=>'required',
                    'totalPaginas'=>'required',
                    'tipoLibro'=>'required',
                    'revista'=>'required',
                    'monografia'=>'required',
                    'codEditorial'=>'required',                    
		];
	}

}

<?php 

namespace crud\Http\Controllers;
use crud\Productos;
//use crud\Http\Requests;
use crud\Http\Requests\CreateProductosRequest;
use crud\Http\Requests\EditProductosRequest;
use crud\Http\Controllers\Controller;
//use crud\Http\Request\CreateProductosRequest;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ProductosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $productos = Productos::paginate();
            return view('productos.index', compact('productos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return view('productos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( CreateProductosRequest $request)
	{
            $productos = new Productos( $request->all() );
	    $productos->save();
            return redirect()->route( 'productos.index' );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit( $id )
	{
            $producto = Productos::findOrFail( $id );
	    return view( 'productos.edit', compact( 'producto' ) );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update( EditProductosRequest $request, $id )
	{
            $productos = Productos::findOrFail( $id );
            $productos->fill( $request->all() );
            $productos->save();
	    return redirect()->route( 'productos.index' );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            Productos::destroy( $id );
            Session::flash('message','El registro fue Eliminado.');
            return redirect()->route('productos.index');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Http\Controllers\Alert;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = productos::paginate();


        return view('indexProductos',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crearProducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $datos = $request->validate(
            [
                'NomProducto' => 'required|max:60',
                'Referencia' => 'required|min:1|max:99',
                'Precio' => 'required|min:1|max:99',
                'Peso' => 'required|min:1|max:99',
                'Categoria' => 'required|max:60',
                'Stock' => 'required|min:1|max:99',
            ]);

            $producto =  new productos;

            $producto->Nom_producto = $datos['NomProducto'];
            $producto->Referencia = $datos['Referencia'];
            $producto->Precio = $datos['Precio'];
            $producto->Peso = $datos['Peso'];
            $producto->Categoria = $datos['Categoria'];
            $producto-> Stock  = $datos['Stock'];
            $producto->Ventas = 0 ;
            $producto->fech_creacion = date('Y-m-d H:i:s');;

            $producto->save();

            return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(productos $producto)
    {
        return view('ventaProducto', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = productos::find($id);

        // dd($producto);

    return view('editarProducto', compact('producto' ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productos $producto)
    {
        $datos = $request->validate(
            [
                'Nom_producto' => 'required|max:60',
                'Referencia' => 'required|min:1|max:99',
                'Precio' => 'required|min:1|max:99',
                'Peso' => 'required|min:1|max:99',
                'Categoria' => 'required|max:60',
                'Stock' => 'required|min:1|max:99',
            ]);

        $data = request()->except(['_token', '_method']);
        $producto->update($data);

        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(productos $producto)
    {
        $producto->delete();

        return redirect()->route('producto.index');
    }

    public function vender (Request $request, productos $producto)
    {
        $datos = $request->validate(
            [
                'cantProduct' => 'required|min:1',
            ]);

        if ($request->cantProduct > $producto->Stock) {
            $alert = 'la cantidad a vender es superior que la cantidad en stock';

            return view('ventaProducto', compact('producto','alert'));

        }else{
            $producto->Stock  = -1*($request->cantProduct - $producto->Stock);
            $producto->Ventas += $request->cantProduct;
            $producto->save();
            dd($producto);

        }


        return redirect()->route('producto.index');
    }
}

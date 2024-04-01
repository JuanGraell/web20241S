<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Producto::all();
        return view('gestion_productos')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Va a la vista crear_products
        return view('crear_productos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Se crea una instancia
        $products = new Producto();
        // Se asigna como si fuese un constructor
        // Base de datos = los datos del formulario
        $products->nombre = $request->nom;
        $products->descripcion = $request->descri;
        $products->precio = $request->precio;
        $products->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Se utiliza para consultar los datos a editar
        $products = Producto::find($id);
        return view('editar_productos')->with('products', $products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Se hace el Update en la base de datos
        $products = Producto::find($id);
        $products->nombre = $request->nom;
        $products->descripcion = $request->descri;
        $products->precio = $request->precio;
        $products->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Para eliminar un registro de la Base de datos
        $products = Producto::find($id);
        $products->delete();
        return redirect()->route('products.index');
    }
}

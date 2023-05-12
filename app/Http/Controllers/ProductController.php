<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //Motrar el listado de nuestros productos agregados
        $productos = Product::all();

        return view('product.index')->with('products',$productos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create se encarga de mostrar el formulario para agregar un nuevo elemento
        //Obtener categorias
        $categories = Category::all();
        return view('product.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Logica para almacenar nuestro nuevo elemento
        $entrada = $request->all();    // obteniendo los valores enviados x el formulario
        Product::create($entrada);    //  logica para crear un nuevo producto 
        return redirect('products'); // para enviar al usuario al listado de productos
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //me va a buscar el producto que cumpla con ese id
        $producto = Product::find($id);
        return view('product.show')->with('product',$producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Product::find($id);
        $categoria = Category::find($producto->id);
        $categories = Category::all();
        return view('product.edit')->with('producto',$producto)->with('categoria',$categoria)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto= Product::find($id);
        $entrada = $request->all(); //obtengo los valores que se han enviado por el formulario
        $producto->update($entrada); // eloquent: modicando producto, indicando los nuevos valores
        return redirect('products');  // devolviendo al listado
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id); // Eloquent
        return redirect('products'); //al listado
    }
}

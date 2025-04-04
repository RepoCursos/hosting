<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create(): View
    {
        //al querer mostrar el nombre de la clave foranea, tengo que declarar la variable categories 
        $categories = Category::orderBy('name')->get();
        return view('product.create', compact('categories'));
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $product = Product::create($request->all());

        //consultamos si la variable request tiene un archivo. 
        if ($request->hasFile('urlfoto')) {
//le indicamos en la variable $fileName que guarde el nombre del archivo con los parametros indicados
            $fileName = $product->id . '-' . time() . '.' . $request->file('urlfoto')->extension();
            //lo guardamos en el storage public para que sea publico y este en el disco del servidor
            $request->file('urlfoto')->storeAs('public/images', $fileName);
            // guardamos el nombre en la base de datos
            $product->urlfoto = $fileName;
            $product->save();
        }

        return redirect()->route('product.index')->with('success', 'Product created');
    }

    public function edit(Product $product): View
    {
        //al querer mostrar el nombre de la clave foranea, tengo que declarar la variable categories y luego pasarla a la  vista
        $categories = Category::orderBy('name')->get();
        return view('product.edit', compact('product'), compact('categories'));
    }

    public function update(ProductRequest $request, Product  $product): RedirectResponse
    {
        //consultamos si la variable request tiene un archivo. 
        if ($request->hasFile('urlfoto')) {
            //guardamos en la variabel $uri en archivo que tenemos en la base de datos
            $uri = 'public/images/' . $product->urlfoto;
            //lo eliminamos del storage publico del servidor
            Storage::delete($uri);
            //le indicamos en la variable $fileName que guarde el nombre del archivo con los parametros indicados
            $fileName = $product->id . "-" . time() . '.' . $request->file('urlfoto')->extension();
            //lo guardamos en el storage public para que sea publico y este en el disco del servidor
            $request->file('urlfoto')->storeAs('public/images', $fileName);
            // guardamos el nombre en la base de datos
            $product->urlfoto = $fileName;
            $product->save();
        }

        $product->update($request->input());
        return redirect()->route('product.index')->with('success', 'Product updated');
    }

    public function destroy(Product $product)
    {
        //guardamos en la variabel $uri en archivo que tenemos en la base de datos
        $uri = 'public/images/' . $product->urlfoto;
        //lo eliminamos del storage publico del servidor
        Storage::delete($uri);
        // eliminamos de la base de datos
        $product->delete();
        return redirect()->route('product.index')->with('danger', 'Product deleted');
    }

    //Podria modificar el archivo index y solo mostrar el id, foto, nombre. Y el resto mostratlo en otra pagina
    //donde la enviariamos mediante un enlace a la ruta ('product.show', $variable->id) donde la variable pasa el id
    //del producto a mostrar todos los campos. 
    // NO LA VOY A COMPLICAR AHORA
    /**
     *public function show(Product $id): View
     *{
     *    return view('product.show', compact('id'));
     *} 
     */
}

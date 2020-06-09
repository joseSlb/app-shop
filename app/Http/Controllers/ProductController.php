<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function show($id)
    {
    	$product = Product::find($id);
    	$images = $product->images; //dividimos en dos coleciones de imagenes
    	
    	$imagesLeft = collect();  //colecccion izquierda modulo2.
    	$imagesRight = collect(); // coleccion derecha modulo1.
    	foreach ($images as $key => $image) {
    		if ($key%2==0) //si imagen esta en modulo 1 poner en la izquierda
    			$imagesLeft->push($image);
    		else // si no, poner en la derecha
    			$imagesRight->push($image);
    	}

    	return view('products.show')->with(compact('product', 'imagesLeft', 'imagesRight'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
use App\Salesman;

class ProductsController extends Controller
{
  public function index()
  {
    return response()->json(Product::all());
  }

  public function show($id)
  {
    return response()->json(Product::findOrFail($id));
  }

  public function store(ProductRequest $request)
  {
    $attributes = $request->all();
    $tags = $request->input('tags');
    $salesman_id = $request->input('salesman_id');

    $salesman = Salesman::findOrfail($salesman_id);
    $product = Product::create(['salesman_id' => $salesman_id]);
    return response()->json($product);
  }

  public function update(Request $request, Product $product)
  {
    $attributes = $request->all();
    $product->update($attributes);
    return $product;
  }

  public function destroy(Product $product)
  {
    $product->delete();
    return response()->json('', 204);
  }
}

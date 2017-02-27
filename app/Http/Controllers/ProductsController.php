<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Salesman;
use App\Tag;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductPartialUpdateRequest;

class ProductsController extends Controller
{
  public function index()
  {
    $info = Product::with('tags', 'salesman')->get();
    return response()->json($info);
  }

  public function show($id)
  {
    $product = Product::with('tags', 'salesman')->findOrFail($id);
    //$product->load('tags', 'salesman');
    return response()->json($product);
  }

  public function store(ProductRequest $request)
  {
    $attributes = $request->except('tags', 'salesman_id');
    $product = new Product($attributes);
    $product->salesman()->associate($request->salesman_id);
    $product->save();
    $tags_info = $request->input('tags');
    foreach ($tags_info as $tag_name) {
      $tag = Tag::firstOrCreate(['name'=>$tag_name]);
      $product->tags()->attach($tag);
    }

    $product->load('tags', 'salesman');

    return response()->json($product);
  }

  public function update(ProductRequest $request, Product $product)
  {
    $attributes = $request->all();
    $product->update($attributes);
    return $product;
  }

  public function partial_update(ProductPartialUpdateRequest $request, Product $product)
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

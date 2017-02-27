<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Product;
use App\Http\Requests\ReviewRequest;

class ProductReviewsController extends Controller
{
  public function store(ReviewRequest $request, Product $product)
  {
    $attributes = $request->all();

    $review = New Review($attributes);
    $product->reviews()->save($review);

    return response()->json($review);
  }

  public function index(Product $product)
  {
    return response()->json($product->reviews()->get());
  }

  public function destroy(Product $product, Review $review)
  {
    $review->delete();
    return response()->json('', 204);
  }
}

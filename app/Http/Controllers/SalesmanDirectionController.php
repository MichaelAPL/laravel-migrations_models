<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Direction;
use App\Salesman;

class SalesmanDirectionController extends Controller
{
    public function store(Request $request, Salesman $salesman)
    {
      $attributes = $request->all();

      $direction = new Direction($attributes);
      $salesman->direction()->save($direction);

      return response()->json($direction);
    }

    public function update(Request $request, Salesman $salesman)
    {
      $attributes = $request->all();
      $direction = $salesman->direction;
      $direction->update($attributes);

      return response()->json($direction);
    }
}

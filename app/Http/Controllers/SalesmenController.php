<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salesman;

class SalesmenController extends Controller
{
    public function index()
    {
      return response()->json(Salesman::all());
    }

    public function show($id)
    {
      return response()->json(Salesman::findOrFail($id));
    }

    public function store(Request $request)
    {
      $attributes = $request->all();
      $salesman = Salesman::create($attributes);
      return response()->json($salesman);
    }

    public function update(Request $request, Salesman $salesman)
    {
      $attributes = $request->all();
      $salesman->update($attributes);
      return $salesman;
    }

    public function destroy(Salesman $salesman)
    {
      $salesman->delete();
      return response()->json('', 204);
    }
}
<?php

namespace App\Http\Controllers\Api\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $itens = Product::all();

    return response()->json($itens);
  }
}

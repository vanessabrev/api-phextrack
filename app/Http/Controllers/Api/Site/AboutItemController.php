<?php

namespace App\Http\Controllers\Api\Site;

use App\Http\Controllers\Controller;

use App\Models\AboutItem;

class AboutItemController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $itens = AboutItem::all();

    return response()->json($itens);
  }
}

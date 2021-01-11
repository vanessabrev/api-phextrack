<?php

namespace App\Http\Controllers\Api\Site;;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $itens = SocialMedia::all();

    return response()->json($itens);
  }
}

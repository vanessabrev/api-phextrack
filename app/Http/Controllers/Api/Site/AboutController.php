<?php

namespace App\Http\Controllers\Api\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutGallery;
use App\Models\AboutItem;

class AboutController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $mainAbout = About::all();
    $galleries = AboutGallery::all();
    $itemsAbout = AboutItem::all();

    $response = $this->mergeObjectItens($mainAbout, $galleries,  $itemsAbout);

    return response()->json($response);
  }

  private function mergeObjectItens($mainAbout, $galleries,  $itemsAbout)
  {
    $listAbouts['mainAbout'] = $mainAbout;
    $listAbouts['galleries'] = $galleries;
    $listAbouts['itemsAbout'] = $itemsAbout;
    return $listAbouts;
  }
}

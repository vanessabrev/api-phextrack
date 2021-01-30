<?php

namespace App\Http\Controllers\Api\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductItem;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $listProducts = Product::all();
    $listProductItens = ProductItem::all();

    $responseProducts = $this->mergeObjectItens($listProducts, $listProductItens);

    return response()->json($responseProducts);
  }

  private function mergeObjectItens($listProducts,  $listProductItens)
  {
    foreach ($listProducts as $key => $product) {
      $itensArray = [];
      foreach ($listProductItens as $item) {
        if ($item->id_product == $product->id) :
          array_push($itensArray, $item);
        endif;
      }
      $listProducts[$key]->listDescriptions = $itensArray;
    }

    return $listProducts;
  }
}

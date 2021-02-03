<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductItem;
use Illuminate\Http\Request;

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

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $now = date('Y-m-d H:i:s');

    $product = new Product();
    $request->name ? $product->name = $request->name : null;
    $request->price ? $product->price = $request->price : null;
    $request->description ? $product->description = $request->description : null;
    $request->image ? $product->image = $request->image : null;
    $request->expiration_date ? $product->expiration_date = $request->expiration_date : null;
    $product->created_at = $now;
    $product->updated_at = $now;

    try {
      $product->save();

      foreach ($request->listDescriptions as $value) {
        $item = new ProductItem($value);
        $item->id_product = $product->id;
        $item->save();
      }

      return response()->json(["message" => 'Informacoes foram salvas'], 200);
    } catch (\Exception $e) {
      return response()->json(["error" => $e, "message" => 'Erro inesperado ao salvar informacoes']);
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {

    return response()->json(["message" => 'TODO: Falta desenvolver'], 200);

    // try {
    //   $product = Product::find($id);
    //   if ($product) {
    //     $product->update($request->all());
    //     return response()->json(["message" => 'Informacoes foram atualizadas'], 200);
    //   } else {
    //     return response()->json(["message" => 'ID nao encontrado no banco de dados'], 500);
    //   }
    // } catch (\Exception $e) {
    //   return response()->json(["error" => $e, "message" => 'Erro inesperado ao alterar informacoes']);
    // }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {

    return response()->json(["message" => 'TODO: Falta desenvolver'], 200);

    // try {
    //   $product = product::find($id);
    //   if ($product) {
    //     $product->delete();
    //     return response()->json(["message" => 'Informacoes foram deletadas'], 200);
    //   } else {
    //     return response()->json(["message" => 'ID nao encontrado no banco de dados'], 500);
    //   }
    // } catch (\Exception $e) {
    //   return response()->json(["error" => $e, "message" => 'Erro inesperado ao deletar informacoes']);
    // }
  }
}

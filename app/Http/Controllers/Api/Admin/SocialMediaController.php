<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

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


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    try {
      $socialMedia = SocialMedia::find($id);
      if ($socialMedia) {
        $socialMedia->update($request->all());
        return response()->json(["message" => 'Informacoes foram atualizadas'], 200);
      } else {
        return response()->json(["message" => 'ID nao encontrado no banco de dados'], 500);
      }
    } catch (\Exception $e) {
      return response()->json(["error" => $e, "message" => 'Erro inesperado ao alterar informacoes']);
    }
  }

}

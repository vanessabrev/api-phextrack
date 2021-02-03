<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfoHome;
use Illuminate\Http\Request;


class InfoHomeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $itens = InfoHome::all();
    return response()->json($itens);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    try {
      $infos = new InfoHome($request->all());
      $infos->save();
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
    try {
      $info = InfoHome::find($id);
      if ($info) {
        $info->update($request->all());
        return response()->json(["message" => 'Informacoes foram atualizadas'], 200);
      } else {
        return response()->json(["message" => 'ID nao encontrado no banco de dados'], 500);
      }
    } catch (\Exception $e) {
      return response()->json(["error" => $e, "message" => 'Erro inesperado ao alterar informacoes']);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    try {
      $info = InfoHome::find($id);
      if ($info) {
        if ($info->id === 1) { // REGRA DE NEGOCIO: NAO deletar as infos do card principal
          return response()->json(["message" => 'As informacoes do cartao principal nao podem ser deletadas'], 200);
        } else {
          $info->delete();
          return response()->json(["message" => 'Informacoes foram deletadas'], 200);
        }
      } else {
        return response()->json(["message" => 'ID nao encontrado no banco de dados'], 500);
      }
    } catch (\Exception $e) {
      return response()->json(["error" => $e, "message" => 'Erro inesperado ao deletar informacoes']);
    }
  }
}

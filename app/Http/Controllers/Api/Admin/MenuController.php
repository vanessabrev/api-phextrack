<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $itens = Menu::all();
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
      $menus = new Menu($request->all());
      $menus->save();
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
      $menu = Menu::find($id);
      if ($menu) {
        $menu->update($request->all());
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
      $menu = Menu::find($id);
      if ($menu) {
        $menu->delete();
        return response()->json(["message" => 'Informacoes foram deletadas'], 200);
      } else {
        return response()->json(["message" => 'ID nao encontrado no banco de dados'], 500);
      }
    } catch (\Exception $e) {
      return response()->json(["error" => $e, "message" => 'Erro inesperado ao deletar informacoes']);
    }
  }
}

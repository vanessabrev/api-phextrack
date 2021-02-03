<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseTesteController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //  $itens = TesteModel::all();
    // return response()->json($itens);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // try {
    //   $teste = new TesteModel($request->all());
    //   $teste->save();
    // } catch (\Exception $e) {
    //   return response()->json(["error" => '$e->getCode()']);
    // }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
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
    //  try {
    //   $teste = TesteModel::find($id);
    //   if ($teste) {
    //     $teste->update($request->all());
    //     return response()->json(["message" => 'Informacoes foram atualizadas'], 200);
    //     // If your body is JSON then you will probably need:
    //     // $teste->update($request->json()->all());
    //   } else {
    //     return response()->json(["message" => 'ID nao encontrado no banco de dados'], 500);
    //   }
    // } catch (\Exception $e) {
    //   return response()->json(["error" => '$e->getCode()']);
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
    // try {
    //   $teste = TesteModel::find($id);
    //   if ($teste) {
    //     $teste->delete();
    //     return response()->json(["message" => 'Informacoes foram deletadas'], 200);
    //   } else {
    //     return response()->json(["message" => 'ID nao encontrado no banco de dados'], 500);
    //   }
    // } catch (\Exception $e) {
    //   return response()->json(["error" => '$e->getCode()']);
    // }
  }
}

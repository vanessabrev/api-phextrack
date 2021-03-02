<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadImagesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return response()->json(["message" => 'Esse enpoint foi criado para salvar imagens'], 200);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) //  {image, local, name }
  {
    try {
      $image = $request->file('image');
      $local = $request->local;
      $name = $request->name;

      // save to storage/app/images as the new $filename
      $filename =  $name . '.' . $image->getClientOriginalExtension();
      $path = $image->storeAs('images/' .  $local, $filename);

      return response()->json(["message" => 'Informacoes foram salvas', "path" => $path], 200);

    } catch (\Exception $e) {
      return response()->json(["error" => $e, "message" => 'Erro inesperado ao salvar informacoes']);
    }
  }
}

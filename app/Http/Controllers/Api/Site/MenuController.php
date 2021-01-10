<?php

namespace App\Http\Controllers\Api\Site;

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
    $menus = Menu::all();

    return response()->json($menus);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    // TODO: Criar o método
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // TODO: Criar o método
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Menu  $menu
   * @return \Illuminate\Http\Response
   */
  public function show(Menu $menu)
  {
    // TODO: Criar o método
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Menu  $menu
   * @return \Illuminate\Http\Response
   */
  public function edit(Menu $menu)
  {
    // TODO: Criar o método
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Menu  $menu
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Menu $menu)
  {
    // TODO: Criar o método
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Menu  $menu
   * @return \Illuminate\Http\Response
   */
  public function destroy(Menu $menu)
  {
    // TODO: Criar o método
  }
}

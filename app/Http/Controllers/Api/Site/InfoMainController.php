<?php

namespace App\Http\Controllers\Api\Site;

use App\Http\Controllers\Controller;
use App\Models\InfoMain;
use App\Models\Menu;
use Illuminate\Http\Request;

class InfoMainController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $infoMains = InfoMain::all();
    $menus = Menu::all();
    // $themeColors = ThemeColors::all(); // TODO: criar enpoint, model, migration e seeder

    $response = $this->mergeObjectItens($infoMains, $menus);

    return response()->json($response);
  }

  private function mergeObjectItens($infoMains, $menus)
  {
    $listMerge['infoMains'] = $infoMains;
    $listMerge['menus'] = $menus;
    return $listMerge;
  }
}

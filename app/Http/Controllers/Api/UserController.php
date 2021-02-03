<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();

    return response()->json($users);
  }
}

// if(empty($request->password)){
// $user->password = Hash::make($request->password);
// }
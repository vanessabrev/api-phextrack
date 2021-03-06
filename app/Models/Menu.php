<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'name', 'position', 'reference'
  ];

  static function rules()
  {
    return [
      'name' => 'required|string|max:50',
      'position' => 'required|numeric',
      'reference' => 'required|string|max:50',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'position', 'id');
  }

}

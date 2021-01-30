<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'id_product', 'description'
  ];

  static function rules()
  {
    return [
      'id_product' => 'required|integer',
      'description' => 'required|string|max:150',
      // 'id_product' => 'string|sometimes|required|unique:customers',
      // 'description' => 'required|min:10',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'id_product', 'id');
  }
}

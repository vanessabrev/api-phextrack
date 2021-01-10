<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'name', 'description', 'price', 'image', 'expiration_date'
  ];

  static function rules()
  {
    return [
      'name' => 'required|string|max:50',
      'description' => 'required|string|max:150',
      'price' => 'required|numeric',
      'image' => 'image', //The file under validation must be an image (jpeg, png, bmp, gif, svg, or webp)
      'expiration_date' => 'datetime',


      // 'email' => 'string|sometimes|required|unique:customers',
      // 'telephone' => 'required|min:10',
      // 'address' => 'required',
      // 'neighborhood' => 'required',
      // 'cep' => 'required|min:7',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'name', 'id');
  }
}

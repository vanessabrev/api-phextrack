<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'address', 'phones', 'emails'
  ];

  static function rules()
  {
    return [
      'adresses' => 'required|array|min:3',
      'phones' => 'required|array|min:3',
      'emails' => 'required|array|min:3',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'id');
  }
}

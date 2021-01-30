<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'phones'
  ];

  static function rules()
  {
    return [
      'phone' => 'required|string|max:50',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'id', 'phone');
  }
}

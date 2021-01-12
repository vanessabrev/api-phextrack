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
      'address' => 'required|string|max:300',
      'phones' => 'required|string|max:100',
      'emails' => 'required|string|max:100',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'position', 'id');
  }
}

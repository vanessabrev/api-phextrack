<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'email'
  ];

  static function rules()
  {
    return [
      'email' => 'required|string|max:100',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'id', 'email');
  }
}

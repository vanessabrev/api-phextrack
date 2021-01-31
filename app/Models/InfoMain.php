<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoMain extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'title', 'subtitle', 'image'
  ];

  static function rules()
  {
    return [
      'title' => 'required|string|max:100',
      'subtitle' => 'required|string|max:150',
      'image' => 'required|string|max:150',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'id');
  }
}

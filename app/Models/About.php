<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'title', 'text'
  ];

  static function rules()
  {
    return [
      'title' => 'required|string|max:100',
      'text' => 'required|string|max:200',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'title', 'id');
  }
}

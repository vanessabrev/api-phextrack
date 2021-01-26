<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutItem extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'title', 'text', 'icon'
  ];

  static function rules()
  {
    return [
      'title' => 'required|string|max:100',
      'text' => 'required|string|max:300',
      'icon' => 'required|string|max:30',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'title', 'id');
  }
}

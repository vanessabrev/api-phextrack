<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutGallery extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'name', 'image'
  ];

  static function rules()
  {
    return [
      'name' => 'required|string|max:100',
      'image' => 'required|string|max:300',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'name', 'id');
  }
}

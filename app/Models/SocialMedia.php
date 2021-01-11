<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
  use HasFactory;

  protected $fillable = [
    'id', 'instagram', 'twitter', 'facebook', 'linkedin', 'skype'
  ];

  static function rules()
  {
    $rule = 'required|string|max:50';

    return [
      'instagram' => $rule,
      'twitter' => $rule,
      'facebook' => $rule,
      'linkedin' => $rule,
      'skype' => $rule,
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'id');
  }
}

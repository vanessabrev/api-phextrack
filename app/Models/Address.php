<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  use HasFactory;

  protected $table = 'adresses'; //Modificar o nome da tabela na query do BD

  // street, number, complement, postalCode, city, municipality, uf
  protected $fillable = [
    'id', 'street', 'number', 'complement', 'postalCode', 'city', 'municipality', 'uf'
  ];

  static function rules()
  {
    return [
      'street'        => 'required|string|max:100',
      'number'        => 'required|string|max:20',
      'complement'    => 'required|string|max:80',
      'postalCode'    => 'required|string|max:20',
      'city'          => 'required|string|max:50',
      'municipality'  => 'required|string|max:50',
      'uf'            => 'required|string|max:5',
    ];
  }

  public function orders()
  {
    return $this->hasMany(Order::class, 'id', 'postalCode');
  }
}

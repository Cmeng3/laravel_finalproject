<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class petHealth extends Model
{
  use HasFactory;

  protected $primaryKey = 'health_id';
  protected $table = 'pet_health';
  protected $fillable = [
    'eye_check',
    'body_check',
    'ears_check',
    'weight_check',
    'new conlumn',
    'animal_id',
  ];

  public function animal()
  {
    return $this->belongsTo(animal::class, 'animal_id');
  }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet_info extends Model
{
    use HasFactory;
    protected $primaryKey = 'pet_id';
    protected $table = 'pet_info';
    protected $fillable = 
[   'name',
    'age', 
    'nationality',
    'health', 
    'owner_id',
    'gender',
    'weight',
    'title',
    'details'
];
public function animal()
{
    return $this->belongsTo(Animal::class, 'animal_id', 'animal_id');
}
}

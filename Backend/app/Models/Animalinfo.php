<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animalinfo extends Model
{
    use HasFactory;

    protected $primaryKey = 'animal_id';

    protected $table ="animal";

    protected $fillable = [
        'animal_name',
        'img',
        'description',
        'price',
    ];
}

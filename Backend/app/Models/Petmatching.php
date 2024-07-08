<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petmatching extends Model
{
    use HasFactory;

    protected $primaryKey = 'animal1_id';

    protected $table = "animal1";

    protected $fillable = [
        'human_trait',
        'Animal_traits',
        'meet_ivy',
        'img'
    ];
}


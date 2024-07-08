<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    use HasFactory;
    protected $table = 'animals';
    protected $primaryKey = 'animal_id';
    protected $fillable = [
        'Animal_id',
        'Categories',
        'Date_found',
        'Date_adoption',
        'Service_cost',
        'Picture',
        'Pet_name',
        'description',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reservations(){
        return $this->hasMany(reserved::class, 'animal_id');
    }
    public function healthReacords(){
        return $this->hasMany(petHealth::class, 'animal_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $primaryKey = 'animal_id';

    protected $table ="animals";

    protected $fillable = [
        'animal_id',
        'categories',
        'date_found',
        'date_adoption',
        'service_cost',
        'picture',
        'pet_name',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reserved::class, 'animal_id');
    }
}

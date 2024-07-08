<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table ="users";

    protected $fillable = [
        'name',
        'password',
        'telephone',
        'email',
    ];

    public function contactUs()
    {
        return $this->hasMany(ContactUs::class, 'user_id');
    }

    public function animals()
    {
        return $this->hasMany(Animal::class, 'user_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reserved::class, 'user_id');
    }
}

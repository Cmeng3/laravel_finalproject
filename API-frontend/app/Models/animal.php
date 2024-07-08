<?php

namespace App\Models;
use App\Models\pet_info;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animal extends Model
{
    use HasFactory;
    protected $primaryKey = 'animal_id';
    protected $table='animal';
    protected $fillable =
    [
        'animal_name',
        'img',
        'description',
        'price',
    ];
    public function petInfo()
    {
        return $this->hasMany(pet_info::class, 'animal_id', 'animal_id');
    }
}

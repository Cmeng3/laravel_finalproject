<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $primaryKey = 'Contact_us_ID';

    protected $table = "contact_us";

    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'phone',
        'message',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}


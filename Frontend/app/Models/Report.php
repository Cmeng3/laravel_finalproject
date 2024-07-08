<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $primarykey ='report_id';
    protected $table ='report';
    protected $fillable=
    [
        'title',
        'img',
        'detail'
    ];
}

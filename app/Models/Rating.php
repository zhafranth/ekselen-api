<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factiories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $dates= ['deleted_at'];

    protected $table = 'rating';
    protected $primaryKey = 'idrating';

    protected $fillable = [
        'rating'
    ];
}
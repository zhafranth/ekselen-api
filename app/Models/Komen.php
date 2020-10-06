<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'komen';
    protected $primaryKey = 'idkomen';

    protected $fillable = [
        'komen'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    protected $dates = ['deleted_at'];

    protected $table = 'kupon';
    protected $primaryKey = 'idkupon';

    protected $fillable = [
        'name'
    ];
}
<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Sepeda extends Model
{
    protected $fillable = [
        'jenis_sepeda',
        'merk',
        'harga',
    ];
}

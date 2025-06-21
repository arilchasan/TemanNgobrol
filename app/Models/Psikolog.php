<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    protected $fillable = [
        'nama',
        'role',
        'tentang',
        'kasus',
        'price',
        'image',

    ];


    public function getFullNameAttribute()
    {
        return $this->nama . ' (' . $this->role . ')';
    }
}

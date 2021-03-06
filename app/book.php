<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public $timestamps = true;
    protected $fillable = ['judul', 'penulis', 'halaman', 'tahunterbit'];
}

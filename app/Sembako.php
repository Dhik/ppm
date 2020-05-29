<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sembako extends Model
{
    protected $table = 'sembako';
    protected $fillable = ['nama_barang','stok','harga'];
}

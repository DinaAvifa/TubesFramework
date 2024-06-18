<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenis extends Model
{
    protected $table='jenis';
    use HasFactory;
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }

}

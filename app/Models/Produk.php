<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $table='produk';
    public function jenis()
    {
        return $this->belongsTo(Jenis::class,'jenis_id','id');
    }

}

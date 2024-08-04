<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier'; 

    protected $primaryKey = 'id_supplier'; 

    protected $fillable = [
        'nama_supplier', 'alamat', 'no_hp', 'id_barang'
    ];

    
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}

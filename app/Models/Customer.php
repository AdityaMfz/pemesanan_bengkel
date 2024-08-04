<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_customer';
    protected $table = 'customer';
    protected $fillable = ["nama_customer","alamat","jenis_kelamin"];

    public static $jenisKelamin = [
        'L' => 'Laki-laki',
        'P' => 'Perempuan',
    ];
}

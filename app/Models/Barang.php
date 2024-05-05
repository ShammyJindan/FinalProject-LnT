<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'barangs';
    protected $fillable = [
        'kategori',
        'nama',
        'harga',
        'jumlah',
        'foto'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rak;

class Buku extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'bukus';
    protected $fillable = [
        'id',
        'kode_buku',
        'judul_buku',
        'penulis_buku',
        'penerbit_buku',
        'tahun_penerbit',
        'stok',
    ];

    
    public function rak()
    {
        return $this->hasMany(Rak::class);
    }
}

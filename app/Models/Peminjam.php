<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
        'id_buku'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function buku()
    {
        return $this->belongsTo(Product::class, 'id_buku', 'id');
    }
}

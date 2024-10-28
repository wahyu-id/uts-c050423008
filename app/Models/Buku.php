<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'Buku';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'jumlah_stok',
    ];

    // Jika Anda menggunakan timestamp untuk kolom yang berbeda
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * Relasi dengan model Peminjaman
     */
    public function peminjamans()
    {
        return $this->hasMany('id_buku');
    }
}

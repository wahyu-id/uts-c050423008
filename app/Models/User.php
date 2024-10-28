<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Jika Anda menggunakan timestamp untuk kolom yang berbeda
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // Untuk menyimpan password yang di-hash
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Relasi dengan model Anggota (jika diperlukan)
     */
    public function anggota()
    {
        return $this->hasOne(Anggota::class, 'user_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Nama tabel (opsional, jika nama tabel berbeda dengan plural dari model)
    protected $table = 'mahasiswas'; // karena tabel Anda bernama 'mahasiswas'

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'nim',
        'nama_lengkap',
        'tempat_lahir',
        'tgl_lahir',
        'email',
        'prodi',
        'alamat',
    ];

    // Jika tidak menggunakan timestamps (created_at, updated_at)
    // public $timestamps = true; // defaultnya true

    // Casting tipe data
    protected $casts = [
        'tgl_lahir' => 'date',
    ];
}
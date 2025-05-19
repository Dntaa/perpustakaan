<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'alamat',
        
    ];

    // Jika kamu ingin menggunakan custom timestamps atau ingin menonaktifkan timestamps
    // public $timestamps = false; // nonaktifkan timestamps jika tidak dibutuhkan
}

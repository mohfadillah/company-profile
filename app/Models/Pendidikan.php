<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $fillable = ['universitas', 'jurusan', 'nilai_akhir', 'tanggal_mulai', 'tanggal_akhir'];
}

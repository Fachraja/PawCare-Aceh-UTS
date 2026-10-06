<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Entrustment extends Model
{
    protected $fillable = [
        'user_id',
        'nama_kucing',
        'umur',
        'jenis_kelamin',
        'lokasi',
        'alasan',
        'deskripsi',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
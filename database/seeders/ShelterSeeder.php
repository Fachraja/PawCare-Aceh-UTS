<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shelter;

class ShelterSeeder extends Seeder
{
    public function run(): void
    {
        Shelter::create([
            'nama' => 'PawCare Shelter Banda Aceh',
            'alamat' => 'Banda Aceh, Aceh',
            'no_telepon' => '0812-0000-0000',
            'deskripsi' => 'Lokasi penampungan sementara untuk membantu kucing yang membutuhkan tempat tinggal dan perawatan.',
        ]);

        Shelter::create([
            'nama' => 'PawCare Shelter Aceh Besar',
            'alamat' => 'Aceh Besar, Aceh',
            'no_telepon' => '0813-0000-0000',
            'deskripsi' => 'Tempat penampungan sementara bagi kucing yang dititipkan oleh pemilik.',
        ]);
    }
}
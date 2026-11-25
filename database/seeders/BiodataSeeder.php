<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    public function run(): void
    {
        if (Biodata::count() > 0) {
            return;
        }

        Biodata::create([
            'nama' => 'Isyam Candra',
            'deskripsi' => '24010110222 merupakan master dari uts ini dengan tugas membuat front-end dan mengirimkannya ke grup',
            'foto' => 'images/WhatsApp Image 2026-11-25 at 09.18.57.jpeg',
        ]);

        Biodata::create([
            'nama' => 'Damar Febri Djuliadi',
            'deskripsi' => 'dengan NIM 24010110231 merupakan pegawai dan mempunyai tugas mengerjakan back-end pada UTS ini',
            'foto' => 'images/WhatsApp Image 2026-11-25 at 09.18.52.jpeg',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('libraries')->insert([
            'judul' => 'judul1',
            'penulis' => 'penulis 1',
            'penerbit' => 'penerbit 1',
            'jenis' => 'Komik',
            'genre' => 'Aksi'

       ]);
        
    }
}

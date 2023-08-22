<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->string('sampul');
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->enum('jenis',[
                'Parenting',
                'Komik',
                'Novel',
                'Majalah',
                'Manga'
            ]);
            $table->enum('genre',[
                'Horor','Aksi','Fantasi','Fiksi Ilmiah',
                'Petualangan','Detektif','Misteri','Sejarah',
                'Memoir','Self-Help','Biografi','Otobiografi',
                'Thriller','Romansa','Eksiklopedia','Kamus',
                'Filsafat','Motivasi','Cerita Pendek','Edukasi'

            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
};

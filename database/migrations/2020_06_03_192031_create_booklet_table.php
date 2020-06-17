<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booklet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kode_mhs');
            $table->string('nama');
            $table->string('prodi')->nullable();
            $table->integer('angkatan')->nullable();
            $table->string('id_line')->nullable();
            $table->char('wa',30)->nullable();
            $table->text('pesan')->nullable();
            $table->enum('ttd', ['belum','sudah'])->    default('belum');
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
        Schema::dropIfExists('booklet');
    }
}

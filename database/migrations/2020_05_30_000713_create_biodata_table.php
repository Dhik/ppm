<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kode_mhs')->nullable();
            $table->string('nama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->char('jenis_kelamin',30)->nullable();
            $table->char('asal_daerah',70)->nullable();
            $table->char('asal_desa',70)->nullable();
            $table->char('asal_kelompok',70)->nullable();
            $table->char('universitas',50)->nullable();
            $table->char('fakultas',100)->nullable();
            $table->char('jurusan',100)->nullable();
            $table->integer('tahun_masuk_kuliah')->nullable();
            $table->char('status_mubaligh',7)->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->char('no_telp_anda',30)->nullable();
            $table->char('no_telp_ortu',30)->nullable();
            $table->string('riwayat_penyakit')->nullable();
            $table->text('motivasi')->nullable();
            $table->char('goldar',1)->nullable();
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
        Schema::dropIfExists('biodata');
    }
}

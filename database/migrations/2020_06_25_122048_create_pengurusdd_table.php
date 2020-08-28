<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurusdd', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kode_mhs')->nullable();
            $table->string('ki_daerah')->nullable();;
            $table->char('wa_ki_daerah',30)->nullable();
            $table->text('pesan_ki_daerah')->nullable();
            $table->string('wakil_dae1')->nullable();;
            $table->char('wa_wakil_dae1',30)->nullable();
            $table->string('wakil_dae2')->nullable();;
            $table->char('wa_wakil_dae2',30)->nullable();
            $table->string('wakil_dae3')->nullable();;
            $table->char('wa_wakil_dae3',30)->nullable();
            $table->string('wakil_dae4')->nullable();;
            $table->char('wa_wakil_dae4',30)->nullable();
            $table->string('wakil_dae5')->nullable();;
            $table->char('wa_wakil_dae5',30)->nullable();
            $table->string('wakil_dae6')->nullable();;
            $table->char('wa_wakil_dae6',30)->nullable();

            $table->string('ki_desa')->nullable();;
            $table->char('wa_ki_desa',30)->nullable();
            $table->text('pesan_ki_desa')->nullable();
            $table->string('wakil_des1')->nullable();;
            $table->char('wa_wakil_des1',30)->nullable();
            $table->string('wakil_des2')->nullable();;
            $table->char('wa_wakil_des2',30)->nullable();
            $table->string('wakil_des3')->nullable();;
            $table->char('wa_wakil_des3',30)->nullable();
            $table->string('wakil_des4')->nullable();;
            $table->char('wa_wakil_des4',30)->nullable();
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
        Schema::dropIfExists('pengurusdd');
    }
}

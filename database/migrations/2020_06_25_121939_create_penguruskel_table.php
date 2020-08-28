<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenguruskelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penguruskel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kode_mhs')->nullable();
            $table->string('ki_kel')->nullable();;
            $table->char('wa_ki_kel',30)->nullable();
            $table->text('pesan')->nullable();
            $table->string('wakil_ki_kel')->nullable();;
            $table->char('wa_wakil_ki',30)->nullable();
            $table->string('ku1')->nullable();;
            $table->char('wa_ku1',30)->nullable();
            $table->string('ku2')->nullable();;
            $table->char('wa_ku2',30)->nullable();
            $table->string('ketua')->nullable();;
            $table->char('wa_ketua',30)->nullable();
            $table->string('penerobos1')->nullable();;
            $table->char('wa_penerobos1',30)->nullable();
            $table->string('penerobos2')->nullable();;
            $table->char('wa_penerobos2',30)->nullable();
            $table->string('penerobos3')->nullable();;
            $table->char('wa_penerobos3',30)->nullable();
            $table->string('penerobos4')->nullable();;
            $table->char('wa_penerobos4',30)->nullable();
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
        Schema::dropIfExists('penguruskel');
    }
}

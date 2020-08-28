<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusppmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurusppm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kode_mhs')->nullable();
            $table->string('ketua_dewan_pembina')->nullable();
            $table->string('pembina1')->nullable();
            $table->string('pembina2')->nullable();
            $table->string('ketua_harian')->nullable();
            $table->string('dewan_guru')->nullable();
            $table->string('sekretaris')->nullable();
            $table->string('koor_umum')->nullable();
            $table->string('ku')->nullable();
            $table->string('koor_putra')->nullable();
            $table->string('ketua_tim')->nullable();
            $table->string('koor_putri')->nullable();
            $table->text('penerobos_putra')->nullable();
            $table->text('penerobos_putri')->nullable();
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
        Schema::dropIfExists('pengurusppm');
    }
}

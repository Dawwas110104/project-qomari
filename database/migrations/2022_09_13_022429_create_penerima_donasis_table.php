<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaDonasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerima_donasis', function (Blueprint $table) {
            $table->id();
            $table->integer('donatur_id')->nullable();
            $table->string('name');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->bigInteger('kec_domisili');
            $table->string('nomor_kk');
            $table->string('nik')->unique();
            $table->string('akta_kematian_ibu')->nullable();
            $table->string('akta_kematian_bapak')->nullable();
            $table->integer('rekening_bank')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('penerima_donasis');
    }
}

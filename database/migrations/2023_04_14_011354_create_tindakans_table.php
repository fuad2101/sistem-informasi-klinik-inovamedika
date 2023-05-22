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
        Schema::create('tindakans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id');
            $table->string('no_rm', 20);
            $table->date('tanggal_tindakan');
            $table->string('nama_pasien', 100);
            $table->date('tgl_masuk');
            $table->integer('ttl_obat')->unsigned();
            $table->integer('ttl_tindakan')->unsigned();
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
        Schema::dropIfExists('tindakans');
    }
};

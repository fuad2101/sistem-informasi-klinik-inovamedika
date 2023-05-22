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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_trx',20)->unique();
            $table->string('no_rm', 25);
            $table->string('nama_pasien', 100);
            $table->string('type')->default('cash');
            $table->integer('ttl_tindakan')->unsigned();
            $table->integer('ttl_obat')->unsigned();
            $table->integer('grand_ttl')->unsigned();
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
        Schema::dropIfExists('pembayarans');
    }
};

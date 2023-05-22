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
        Schema::create('pasien_aktifs', function (Blueprint $table) {
            $table->id();
            // $table->foreign('pasien_id')->constrained('pasiens');
            $table->foreignId('pasiens_id')->constrained('pasiens');
            $table->string('nik', 50);
            $table->date('tanggal_masuk');
            // no_rm-nama pasien
            // tanggal tindakan
            // tindakan yang diberikan
            // konsultasi
            // obat


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
        Schema::dropIfExists('pasien_aktifs');
    }
};

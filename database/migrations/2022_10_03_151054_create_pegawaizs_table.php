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
        Schema::create('pegawaizs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nama_petugas');
            $table->text('alamat_petugas');
            $table->text('jabatan');
            $table->text('jam_jaga');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawaizs');
    }
};

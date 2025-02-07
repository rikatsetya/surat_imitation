<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_surat', function (Blueprint $table) {
            $table->id('surat_id');
            $table->string('kepada');
            $table->string('tembusan')->nullable();
            $table->string('pengirim');
            $table->string('pemeriksa')->nullable();
            $table->string('perihal');
            $table->text('isi_surat');
            $table->string('lampiran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_surat');
    }
};

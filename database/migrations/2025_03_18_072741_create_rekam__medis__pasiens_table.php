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
        Schema::create('rekam__medis__pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_pasien");
            $table->foreignId("id_rekam_medis_obat");
            $table->text("diagnosa");
            $table->text("pengobatan");
            $table->date("tanggal");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam__medis__pasiens');
    }
};

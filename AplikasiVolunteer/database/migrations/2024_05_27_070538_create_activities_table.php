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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('judul_aktivitas',255);
            $table->date('tanggal_aktivitas');
            $table->date('tanggal_batas_regitrasi');
            $table->string('lokasi',255);
            $table->unsignedBigInteger('id_organization');
            $table->unsignedBigInteger('id_activities_type');
            $table->timestamps();

            // Foreign
            $table->foreign('id_organization')->references('id')->on('organizations')->onDelete('cascade');
            $table->foreign('id_activities_type')->references('id')->on('activities_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};

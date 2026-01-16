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
        Schema::create('queues', function (Blueprint $table) {
            $table->id();

            // Relasi
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('doctor_id')
                ->constrained()
                ->cascadeOnDelete();

            // Data antrian
            $table->date('visit_date');
            $table->integer('queue_number');
            $table->text('complaint')->nullable();

            // Status antrian
            $table->enum('status', [
                'WAITING',
                'CALLED',
                'DONE',
                'CANCELED'
            ])->default('WAITING');

            $table->timestamps();

            /**
             * Aturan:
             * 1 user hanya bisa mengambil 1 antrian
             * ke dokter yang sama
             * di tanggal yang sama
             */
            $table->unique(
                ['user_id', 'doctor_id', 'visit_date'],
                'unique_user_doctor_date'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queues');
    }
};

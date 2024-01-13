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
        Schema::create('labels_notes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('label_id');
            $table->foreign('label_id')->references('id')->on('labels');

            $table->unsignedBigInteger('note_id');
            $table->foreign('note_id')->references('id')->on('notes');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labels_notes');
    }
};

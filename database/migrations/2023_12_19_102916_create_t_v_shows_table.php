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
        Schema::create('t_v_shows', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('genres');
            $table->date('release_date');
            $table->string('summary');
            $table->string('tvshow_pic')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_v_shows');
    }
};

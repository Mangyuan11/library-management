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
        Schema::create('bookinfo', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullabble();
            $table->string('author')->nullabble();
            $table->string('description')->nullabble();
            $table->string('ISBN')->nullabble();
            $table->string('published year')->nullabble();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookinfo');
    }
};

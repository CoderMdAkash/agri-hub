<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('farming_guides', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('season')->nullable();
            $table->text('summary');
            $table->string('step1_title')->nullable();
            $table->text('step1_detail')->nullable();
            $table->string('step2_title')->nullable();
            $table->text('step2_detail')->nullable();
            $table->string('step3_title')->nullable();
            $table->text('step3_detail')->nullable();
            $table->string('image')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('farming_guides');
    }
};

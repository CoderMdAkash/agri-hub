<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pest_control_strategies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('target_crops')->nullable();
            $table->string('type');
            $table->text('identification');
            $table->text('prevention')->nullable();
            $table->text('biological_control')->nullable();
            $table->text('organic_remedy')->nullable();
            $table->string('image')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pest_control_strategies');
    }
};

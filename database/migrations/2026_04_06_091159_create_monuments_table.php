<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('monuments', function (Blueprint $table) {
            $table->id();
            $table->string('visitname');
            $table->string('authorname');
            $table->integer('year');
            $table->longText('story');
            $table->string('img')->nullable();
            $table->boolean('is_default_image')->default(false);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('monuments');
    }
};
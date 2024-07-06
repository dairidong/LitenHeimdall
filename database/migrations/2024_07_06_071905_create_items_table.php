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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('color')->nullable();
            $table->string('icon')->nullable();
            $table->string('url')->nullable();
            $table->text('description')->nullable();
            $table->string('class')->nullable()->index();
            $table->string('appid')->nullable();
            $table->text('app_description')->nullable();
            $table->unsignedBigInteger('order')->default(0);
            $table->foreignIdFor(\App\Models\Tag::class)->default(0)->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

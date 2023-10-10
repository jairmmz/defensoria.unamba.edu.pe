<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('logo_website')->nullable();
            $table->string('title_website')->nullable();
            $table->string('background_website')->nullable();
            $table->string('banner_website', 250)->nullable();
            $table->string('url_banner', 250)->nullable();
            $table->boolean('is_active_banner');
            $table->string('number_phone')->nullable();
            $table->foreignUuid('id_user')->constrained('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};

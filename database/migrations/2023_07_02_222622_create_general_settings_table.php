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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo_website');
            $table->string('title_website');
            $table->string('background_website');
            $table->string('banner_website')->nullable();
            $table->boolean('is_active_banner')->default(true);
            $table->string('number_phone')->nullable();
            $table->string('link_facebook');
            $table->foreignID('id_user')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};

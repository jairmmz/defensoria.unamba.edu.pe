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
        Schema::create('attention_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name_plaintiff');
            $table->string('identity_card_plaintiff');
            $table->string('condition_plaintiff');
            $table->string('type_request');
            $table->string('issue');
            $table->string('profesional_school_plaintiff')->nullable();
            $table->string('workplace_office_plaintiff')->nullable();
            $table->string('home_address_plaintiff')->nullable();
            $table->string('number_phone_plaintiff')->nullable();
            $table->string('email_plaintiff');
            $table->string('name_defendant');
            $table->string('charge_defendant');
            $table->string('number_phone_defendant')->nullable();
            $table->string('profesional_school_defendant')->nullable();
            $table->string('workplace_office_defendant')->nullable();
            $table->string('description_facts');
            $table->string('violated_rights')->nullable();
            $table->string('description_files')->nullable();
            $table->string('status')->default('pendiente.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attention_form');
    }
};

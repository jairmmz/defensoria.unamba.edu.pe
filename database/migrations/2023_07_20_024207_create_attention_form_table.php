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
        Schema::create('attention_form', function (Blueprint $table) {
            $table->id();
            $table->string('name_plaintiff');
            $table->string('identity_card_plaintiff');
            $table->string('condition_plaintiff');
            $table->string('issue');
            $table->string('profesional_school_plaintiff');
            $table->string('workplace_office_plaintiff');
            $table->string('home_address_plaintiff');
            $table->string('number_phone_plaintiff');
            $table->string('email_plaintiff');
            $table->string('name_defendant');
            $table->string('profesional_school_defendant');
            $table->string('workplace_office_defendant');
            $table->string('charge_defendant');
            $table->string('number_phone_defendant');
            $table->string('description_facts');
            $table->string('violated_rights');
            $table->string('attached_files');
            $table->string('signature_plaintiff');
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

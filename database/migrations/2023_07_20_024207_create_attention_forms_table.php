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
            $table->string('name_plaintiff')->nullable();
            $table->string('identity_code_plaintiff')->nullable();
            $table->string('identity_dni_plaintiff')->nullable();
            $table->string('condition_plaintiff')->nullable();
            $table->string('type_request')->nullable();
            $table->string('issue')->nullable();
            $table->string('profesional_school_plaintiff')->nullable();
            $table->string('workplace_office_plaintiff')->nullable();
            $table->string('home_address_plaintiff')->nullable();
            $table->string('number_phone_plaintiff')->nullable();
            $table->string('email_plaintiff')->nullable();
            $table->string('name_defendant')->nullable();
            $table->string('charge_defendant')->nullable();
            $table->string('number_phone_defendant')->nullable();
            $table->string('profesional_school_defendant')->nullable();
            $table->string('workplace_office_defendant')->nullable();
            $table->text('description_facts')->nullable();
            $table->text('violated_rights')->nullable();
            $table->text('description_files')->nullable();
            $table->text('signature_plaintiff')->nullable();
            $table->string('status')->nullable()->default('pendiente');
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

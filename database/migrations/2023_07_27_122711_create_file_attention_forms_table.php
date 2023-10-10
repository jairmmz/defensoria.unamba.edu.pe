<?php

use App\Models\AttentionForm;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('file_attention_forms', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_attention_form')->constrained('attention_forms');
            $table->string('file_attention_form');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('file_attention_forms');
    }
};

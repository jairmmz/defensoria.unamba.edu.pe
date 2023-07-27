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
            $table->id();
            $table->foreignIdFor(AttentionForm::class);
            $table->string('file_attention_form')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_attention_forms');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttentionForm extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function file_attention_forms() {
        return $this->hasMany(FileAttentionForm::class);
    }
}

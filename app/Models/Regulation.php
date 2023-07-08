<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date_regulation',
        'document_regulation',
        'id_user',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

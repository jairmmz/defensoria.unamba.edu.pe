<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_document',
        'id_user',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

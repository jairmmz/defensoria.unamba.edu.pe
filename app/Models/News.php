<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'link_to_news',
        'is_active',
        'id_user',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

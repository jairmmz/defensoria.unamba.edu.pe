<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beginning extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon_beginning',
        'description',
        'id_user',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

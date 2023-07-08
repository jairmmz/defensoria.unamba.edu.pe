<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_website',
        'title_website',
        'background_website',
        'number_phone',
        'link_facebook',
        'link_twitter',
        'link_instagram',
        'link_youtube',
        'id_user',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

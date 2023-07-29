<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_website',
        'logo_website',
        'background_website',
        'banner_website',
        'is_active_banner',
        'number_phone',
        'link_facebook',
        'id_user',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

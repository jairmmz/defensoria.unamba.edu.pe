<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title_website',
        'logo_website',
        'background_website',
        'banner_website',
        'url_banner',
        'is_active_banner',
        'number_phone',
        'id_user',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

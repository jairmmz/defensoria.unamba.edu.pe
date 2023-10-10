<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'string';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'date_regulation',
        'is_active',
        'document_regulation',
        'id_user',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

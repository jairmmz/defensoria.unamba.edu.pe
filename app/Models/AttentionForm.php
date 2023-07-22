<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttentionForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_plaintiff',
        'identity_card_plaintiff',
        'condition_plaintiff',
        'type_request',
        'issue',
        'profesional_school_plaintiff',
        'workplace_office_plaintiff',
        'home_address_plaintiff',
        'number_phone_plaintiff',
        'email_plaintiff',
        'name_defendant',
        'profesional_school_defendant',
        'workplace_office_defendant',
        'charge_defendant',
        'number_phone_defendant',
        'description_facts',
        'violated_rights',
        'attached_files',
        'status',
    ];
}

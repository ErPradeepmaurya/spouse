<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients'; 

    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'password',
        'dob',
        'father_name',
        'mother_name',
        'country',
        'state',
        'city',
        'pin_code',
        'address',
        'job_type',
        'company_name',
        'salary',
        'experience',
        'degree',
        'whatsapp',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'linkedin'
    ];
}

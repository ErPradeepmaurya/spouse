<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddNewUser extends Model
{
    use HasFactory;
    protected $table = 'add_new_user';
    protected $fillable = [

        'name',
        'email',
        'phone',
        'password',
        'gender',
        'dob',
        'age',
        'height',
        'weight',
        'fathers_name',
        'fathers_job',
        'mothers_name',
        'mothers_job',
        'total_family',
        'total_brother',
        'total_sister',
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
        'college',
        'school',
        'hobbies',
        'whatsapp',
        'facebook',
        'instagram',
        'x',
        'youtube',
        'linkedin',
        'created_at',
        'updated_at'
    ];
}

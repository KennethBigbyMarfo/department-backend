<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
    protected $fillable =[
        'company_id',
        'code',
        'department_name',
        'status',
        'department_type',
        'department_code',
    ];
}


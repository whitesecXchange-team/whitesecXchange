<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class company extends Authenticatable
{
    //
    protected $fillable = [
        'company_name',
        'company_email',
        'password',
        'company_url',
    ];
}

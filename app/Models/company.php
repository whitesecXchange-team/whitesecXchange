<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
    protected $fillable = [
        'company_name',
        'company_email',
        'password',
        'company_url',
    ];
}

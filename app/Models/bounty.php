<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bounty extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',        // Allow mass assignment of the title field
        'description',
        'reward',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}

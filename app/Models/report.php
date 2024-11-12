<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;
    public function bounty()
    {
        return $this->belongsTo(Bounty::class, 'bounty_id');
    }

    // Define the relationship to the User model (or Company model if applicable)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

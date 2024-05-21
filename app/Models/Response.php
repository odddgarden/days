<?php

namespace App\Models;

use App\Models\User;
use App\Models\Prompt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Response extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function prompt()
    {
        return $this->belongsTo(Prompt::class);
    }

    public function responderUser()
    {
        return $this->belongsTo(User::class, 'responder_user_id');
    }
}

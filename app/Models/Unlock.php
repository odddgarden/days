<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unlock extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function viewerUser()
    {
        return $this->belongsTo(User::class, 'viewer_user_id');
    }

    public function profileUser()
    {
        return $this->belongsTo(User::class, 'profile_user_id');
    }
}

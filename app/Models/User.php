<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Prompt;
use App\Models\Unlock;
use App\Models\Picture;
use App\Models\Response;
use Pest\Laravel\Authentication;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function unlocks()
    {
        return $this->hasMany(Unlock::class, 'viewer_user_id');
    }

    public function prompts()
    {
        return $this->hasMany(Prompt::class);
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}

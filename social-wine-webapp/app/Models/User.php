<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'nickname',
        'email',
        'password',
        'country',
        'cap',
        'address',
        'image_path'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'email',
        'email_verified_at',
        'password',
        'address',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'cap' => 'integer'
    ];
    public function roles() {
        return $this->hasMany(Role::class);
    }

    public function isAdmin() {
        return $this->roles()->where("role", "admin")->exists();
    }
    public function isWinery() {
        return $this->roles()->where("role", "winery")->exists();
    }
    public function issupplier() {
        return $this->roles()->where("role", "supplier")->exists();
    }
    public function isUser() {
        return $this->roles()->where("role", "user")->exists();
    }
}

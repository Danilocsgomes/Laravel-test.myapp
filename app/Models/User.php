<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'first_name',
        'las_name',
        'email',
        'password',
    ];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
//  Acessors
//    public function getFullnameAttribute()
//    {
//        return $this->attributes['first_name'].' '.$this->attributes['last_name'];
//    }
    public function fullname(): Atrribute
    {
    return Attribute::make(
        get: fn() => $this->attributes['first_name'].' '.$this-> $attributes['last_name']
 );

    }

    //Mutations
//    public function setPasswordAttribute($value)
//    {
//        if(!is_null($value) && !empty($value)) {
//            $this->attributes['password'] = bcrypt($value);
//        }
//    }

    public function password(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                if(!is_null($value) && !empty($value)) {
                    return bcrypt ($value);
                }
            }
        );
    }

    public function address()
    {
        return $this->morphOne(Address::class, 'addresseable');
    }
}

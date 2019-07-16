<?php

namespace App;

use App\Follows;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function following()
    {
        return $this->hasMany(Follows::Class, 'owner_id');
    }

    public function follower()
    {
        return $this->hasMany(Follows::Class, 'user_id');
    }

    public function is_following($id) {
        $follow = $this->hasMany(Follows::Class, 'owner_id')->where('user_id', $id)->count();
        return ($follow == 0)? false : true;
    }
}

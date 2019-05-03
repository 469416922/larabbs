<?php

namespace App\Models;


// use Illuminate\Notifications\Notifiable;
// use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;

// use Auth;

// use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable implements JWTSubject
{
     public function getJWTIdentifier()
     {
         return $this->getKey();
     }

     public function getJWTCustomClaims()
     {
         return [];
     }
}

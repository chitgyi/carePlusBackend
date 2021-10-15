<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    use HasRoles;

    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone',
    ];

    protected $hidden = [
        'password',
    ];
}

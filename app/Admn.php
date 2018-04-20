<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admn extends Authenticatable
{
    use Notifiable;

    protected $guard = 'jp_admin';
	
	protected $table = 'users';
    const CREATED_AT = 'act_created';
    const UPDATED_AT = 'last_login';    
}

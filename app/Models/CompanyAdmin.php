<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CompanyAdmin extends Authenticatable
{
    use Notifiable;

    protected $table = 'company_admin';
    protected $primaryKey = 'company_admin_id';
    public $timestamps = false;

    protected $fillable =
        [
            'company_id',
            'email',
            'password'
        ];

    protected $hidden =
        [
            'password',
            'remember_token'
        ];
    //
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentQrToken extends Model
{
    public $timestamps = false;

    protected $table = 'student_qr_tokens';

    protected $fillable = [
        'student_id',
        'token',
        'expires_at',
    ];
}

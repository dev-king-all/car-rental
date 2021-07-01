<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountActivity extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'last_login_browser',
        'last_login_at',
        'last_login_ip'
    ];
}

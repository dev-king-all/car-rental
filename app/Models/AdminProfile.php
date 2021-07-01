<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProfile extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'display_name',
        'phone_no',
        'date_of_birth',
        'address1',
        'address2',
        'state',
        'country',
    ];
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}

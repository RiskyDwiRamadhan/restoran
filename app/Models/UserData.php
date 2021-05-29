<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table ="user_data";
    public $timestamps = false;
    protected $primaryKey ="id_user";

    protected $fillable = [
        'email',
        'username',
        'password'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
protected $table = 'user';
protected $fillable = ['id_user', 'nama', 'username', 'password', 'level'];
}

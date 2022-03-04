<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class User extends Model
{
    use HasFactory;
    protected $table = 'user';

    # protected $fillable = ['name', 'lastname', 'email', 'password', 'id_level', 'profession_id'];
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

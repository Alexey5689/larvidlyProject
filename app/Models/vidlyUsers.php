<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vidlyUsers extends Model
{
    protected $primaryKey='id';
    protected $table='vidly_users';
    protected $fillable=['name',
                         'lastname',
                         'email',
                         'password',
                         'remember_token',
                         'created_at',
                         'updated_at'];


    use HasFactory;
}



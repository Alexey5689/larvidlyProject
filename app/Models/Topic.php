<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;
//use Illuminate\Database\Eloquent\Model as Eloquent;


class Topic extends Model
{

    protected $primaryKey='id';
    protected $table='topics';
    protected $fillable=['topicname','created_at','updated_at'];
    //protected $guarded = [];
    protected $rules=['topicname'=>['required','max:5','unique']];
    use HasFactory;
}

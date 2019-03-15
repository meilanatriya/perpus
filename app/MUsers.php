<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MUsers extends Model
{
    //
    protected $table = "tb_users";
    public $timestamps = false;
    protected $guarded =['kd_user'];
}

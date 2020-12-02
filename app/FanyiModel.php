<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FanyiModel extends Model
{
       protected $table = "fanyi";
    protected $primaryKey = 'f_id';
    //不自动添加时间 create_at update_at
    public $timestamps = false;
    protected $guarded = [];
}

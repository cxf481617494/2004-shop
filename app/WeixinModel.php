<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeixinModel extends Model
{
    //指定表名
    protected $table = 'wusers';
    //指定主键
    protected $primaryKey = 'user_id';
    //不自动添加时间 create_at update_at
    public $timestamps = false;
    // //黑名单
    protected $guarded = [];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop_wx_user extends Model
{
    //指定表名
    protected $table = 'p_wx_user';
    //指定主键
    protected $primaryKey = 'p_id';
    //不自动添加时间 create_at update_at
    public $timestamps = false;
    // //黑名单
    protected $guarded = [];
}

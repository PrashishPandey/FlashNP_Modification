<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userInfo extends Model
{
    //
    protected $table='user_infos';
    public $timestamps=false;
    protected $fillable = [
		'user_name', 'user_email','user_pwd', 'user_display', 'user_group', 'user_contact'
	];
}

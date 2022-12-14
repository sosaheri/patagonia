<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminUserConversation extends Model
{
    public function user()
	{
	    return $this->belongsTo('App\Models\User');
	}

	public function admin()
	{
	    return $this->belongsTo('App\Models\Admin');
	}

	public function messages()
	{
	    return $this->hasMany('App\Models\AdminUserMessage','conversation_id');
	}

	public function notifications()
	{
	    return $this->hasMany('App\Models\UserNotification','conversation_id');
	}

	public function adminnotifications()
	{
	    return $this->hasMany('App\Models\Notification','conversation_id');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	//User Manage with Roles
    public function users()
    {
        return $this
            ->belongsToMany('App\User')
            ->withTimestamps();
    }
}

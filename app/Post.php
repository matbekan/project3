<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = []; //do not guard anything, throws error integrity costraint violation (unsignedbiginteger but we are not passing the id )

    public function user() {
    	return $this->belongsTo(User::class);
    }
}

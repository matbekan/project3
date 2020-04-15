<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

  protected $guarded = []; //disabling protection, all pased elements are required and defined
  public function user() {

  	return $this->belongsTo(User::class);
  }
}

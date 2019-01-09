<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestingType extends Model
{
	use SoftDeletes;

	 protected $fillable = [
    	'name',
    	
    ];


    public function checkpoints()
    {
    	return $this->hasMany(Checkpoint::class);
    }
    
}

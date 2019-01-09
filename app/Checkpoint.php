<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkpoint extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'testingType_id',
    	'checkpoint',
    	'description'
    ];

    public function testingType()
    {
    	return $this->belongsTo(TestingType::class,'testingType_id');
    }

}

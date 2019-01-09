<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Technician;


class RrsClient extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'form_no',
    	'type',
    	'name',
    	'controller_no',
    	'technician_id',
    	'mobile',
    	'email',
    	'description',
    	'date',
    ];

    public function rrsDetail(){
    	return $this->hasMany(RrsDetail::class);
    }

    public function technician(){
        $technician = Technician::find($this->technician_id);
        if($technician)
        {
            return $technician->name;
        }else{
            return '';
        }
        
    }

}

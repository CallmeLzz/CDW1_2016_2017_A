<?php

namespace Foostart\Sample\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    //
    protected $table = 'samples';
    protected $primaryKey = 'sample_id';
    public $timestamps = false;
    public $incrementing = false; //$primaryKey will not return to int
    protected $fillable = [
    	'sample_name'
	];

	public function getAllData(){
		return Sample::all();
	}
}
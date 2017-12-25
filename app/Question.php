<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;
use App\Answer;

class Question extends Model
{
    //
	protected $table = 'question';
	protected $fillable =  ['qu_id', 'qu_content','qu_image','qu_audio','qu_type','ca_id','created_at', 'updated_at'];
	
    protected $primaryKey = 'qu_id';
	
	public function getViewQuestion(){
		return DB::table($this->table)
			->orderBy('qu_id', 'asc');
			//->paginate($numberPerPage);
	}
	public function SearchAllQuestion($name){
		return DB::table($this->table)
			->orderBy('qu_id', 'asc')
			->where('qu_content','LIKE',"%".$name."%");
	}
	public function answer(){
		 return $this->belongsToMany('App\Answer','');
		//return $this->hasMany('App\Answer');
		 
	}
}

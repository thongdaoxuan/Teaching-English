<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;
class Answer extends Model
{
    //
	protected $table = 'answer';
	protected $fillable =  ['an_id', 'an_content','an_image','an_audio','an_type','an_spell','an_correct','qu_id','an_created_at', 'an_updated_at'];
	
    protected $primaryKey = 'an_id';
	
	public function getViewQuestion(){
		return DB::table($this->table)
			->orderBy('an_id', 'asc');
			//->paginate($numberPerPage);
	}
	public function SearchAllQuestion($name){
		return DB::table($this->table)
			->orderBy('an_id', 'asc')
			->where('an_content','LIKE',"%".$name."%");
	}
	public function questions(){
		 return $this->belongsToMany('App\Question','qu_id');
		//return $this->hasMany('App\Answer');
		 
	}
}

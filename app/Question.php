<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;

class Question extends Model
{
    //
	protected $table = 'question';
	protected $fillable =  ['ques_id', 'ques_content','ques_image','ques_audio','ques_level','les_id','ques_skill','created_at', 'updated_at'];
	
    protected $primaryKey = 'ques_id';
	
	public function getViewQuestion(){
		return DB::table($this->table)
			->orderBy('ques_id', 'asc');
			//->paginate($numberPerPage);
	}
	public function SearchAllQuestion($name){
		return DB::table($this->table)
			->orderBy('ques_id', 'asc')
			->where('ques_content','LIKE',"%".$name."%");
	}
}

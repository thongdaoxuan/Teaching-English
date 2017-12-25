<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\User;

class Category extends Model
{
    //
	protected $table = 'category';
	protected $fillable =  ['ca_id', 'ca_note','ca_name','created_at', 'updated_at'];
	
    protected $primaryKey = 'ca_id';
	
	public function getViewQuestion(){
		return DB::table($this->table)
			->orderBy('ca_id', 'asc');
			//->paginate($numberPerPage);
	}
	public function SearchAllQuestion($name){
		return DB::table($this->table)
			->orderBy('ca_id', 'asc')
			->where('ca_name','LIKE',"%".$name."%");
	}
}

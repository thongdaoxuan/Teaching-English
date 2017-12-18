<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Auth;
use App\User;
use DB;
use App\Question;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon; 


class TestController extends Controller
{
	//private $numberPerPage = 20;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

	
	public function index()
    {
		// $sql="SELECT *
			// FROM (
				// SELECT qu.*
				// ,(SELECT GROUP_CONCAT('{\"an_id\":',an.an_id,',\"an_content\":\"',an.an_content,'\",\"an_image\":\"',an.an_image ,'\",\"an_audio\":\"',an.an_audio ,'\",\"an_type\":',an.an_type,'}')
					   // FROM answer as an
						// WHERE qu.qu_id = an.qu_id
					   // ) AS answers
				
				// FROM question as qu ) as A
			// WHERE LENGTH (A.answers)>0";
		// $questions = DB::select( DB::raw($sql) );
		
		
		// $question = Question::where('ca_id','=',2)
		// ->join('answer', 'users.id', '=', 'contacts.user_id')
		// ->get();
		//$questions = Question::find(1)->answer()->get();
		 //$question = $questions->joinTableAnswer();
		 //->join('answer', 'question.qu_id', '=', 'answer.qu_id')
		 //->groupBy('question.qu_id')
		 // ->where('ca_id','=', 2)
		 // ->get();
		 
		 //$genre = $question->groupBy('qu_id')->toArray();
		 // echo "<pre>";
		 // return $questions;
		return view('type_learn');
    }
	
	
}

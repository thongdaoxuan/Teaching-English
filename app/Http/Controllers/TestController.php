<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Auth;
use App\User;
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
		$question = Question::all();
		
		return view('home',['question'=>$question]);
    }
	
	
}

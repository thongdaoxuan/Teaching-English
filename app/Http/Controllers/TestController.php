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

	
	public function index($ca_id)
    {
		
		return view('type_learn',['ca_id'=>$ca_id]);
    }
	public function testShort($ca_id)
    {
		
		return view('test_short',['ca_id'=>$ca_id]);
    }
	
}

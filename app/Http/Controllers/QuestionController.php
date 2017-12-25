<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\Category;
use DB;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon; 

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::latest()->paginate(5);
        return view('questions.index',compact('questions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
       
		$categories = Category::all();
        return View('questions.create')
            ->with('categories', $categories);
    }

    public function store( Request $request)
    {
		$this->validate($request, [
            'qu_content' => 'required',
            'ca_id' => 'required',
            'qu_type' => 'required',
        ]);
		$pathImage="";
		$pathAudio="";
		if($request->hasFile('qu_image')) {
			
			$file =Input::file('qu_image');
			//getting timestamp
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			
			$extension = $file->getClientOriginalExtension();
			if(!$this->validateExtImage($extension)){
				return Redirect::back()->with('error', 'Cập nhật thất bại!');
			}
			$name =$timestamp.'.'.$extension;
			$destinationPath =   "/images/";		
			$file->move(public_path($destinationPath), $name);
			$pathImage=$destinationPath.$name;
		
			
		}
		if($request->hasFile('qu_audio')) {
			
			$file =Input::file('qu_audio');
			//getting timestamp
			$timestamp = str_replace([' ', ':','-'], '',Carbon::now()->toDateTimeString());
			
			$extension = $file->getClientOriginalExtension();
			if(!$this->validateExtAudio($extension)){
				return Redirect::back()->with('error', 'Cập nhật thất bại!');
			}
			$name =$timestamp.'.'.$extension;
			$destinationPath =   "/audios/";		
			$file->move(public_path($destinationPath), $name);
			$pathAudio=$destinationPath.$name;
			
		}
        $input['qu_content'] = $request->qu_content;
        $input['qu_image'] = $pathImage;
        $input['qu_audio'] = $pathAudio;
        $input['qu_type'] = $request->qu_type;;
        $input['ca_id'] = $request->ca_id;
        Question::create($input);
        return redirect()->route('questions.index')
                         ->with('success','Category create successfully');
    }
    public function edit($id)
    {
		$categories = Category::all();
        $question = Question::find($id);
        return view('questions.edit',compact('question','categories'));
    }
	public function update(Request $request, $qu_id)
    {
		$this->validate($request, [
            'qu_content' => 'required',
            'ca_id' => 'required',
            'qu_type' => 'required',
        ]);
		
		$input['qu_content'] = $request->qu_content;
        $input['qu_type'] = $request->qu_type;;
        $input['ca_id'] = $request->ca_id;
		if($request->hasFile('qu_image')) {
			
			$file =Input::file('qu_image');
			//getting timestamp
			$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
			
			$extension = $file->getClientOriginalExtension();
			if(!$this->validateExtImage($extension)){
				return Redirect::back()->with('error', 'Cập nhật thất bại!');
			}
			$name =$timestamp.'.'.$extension;
			$destinationPath =   "/images/";		
			$file->move(public_path($destinationPath), $name);
			$input['qu_image']=$destinationPath.$name;
		
			
		}
		if($request->hasFile('qu_audio')) {
		
			$file =Input::file('qu_audio');
			//getting timestamp
			$timestamp = str_replace([' ', ':','-'], '',Carbon::now()->toDateTimeString());
			
			$extension = $file->getClientOriginalExtension();
			if(!$this->validateExtAudio($extension)){
				return Redirect::back()->with('error', 'Cập nhật thất bại!');
			}
			$name =$timestamp.'.'.$extension;
			$destinationPath =   "/audios/";		
			$file->move(public_path($destinationPath), $name);
			$input['qu_audio']=$destinationPath.$name;
			
		}
        
       
        Question::find($qu_id)->update($input);
        return redirect()->route('questions.index')
                        ->with('success','Questions updated successfully');
    }
   
	 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($qu_id)
    {
        Answer::where('qu_id',$qu_id)->delete();
        Question::find($qu_id)->delete();
        return redirect()->route('questions.index')
                        ->with('success','Questions deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\Category;

use Illuminate\Support\Facades\Input;
use Carbon\Carbon; 
class AnswerController extends Controller
{
	
	public function edit($id)
    {
		$question = Question::find($id);
		$answers = Answer::where('qu_id',$id)->get();
        return view('answers.edit',compact('question','answers'));
    }
	 public function update(Request $request,$qu_id){
		$data=$request->all();
		$qu_id= $request->qu_id;
		$qu_type= $request->qu_type;
		$nrAnswer=($qu_type==1?3:1);
		Answer::where('qu_id',$qu_id)->delete();	
		for($i=0;$i<$nrAnswer;$i++){
			
			$input=array("an_content"=>$data["an_content".$i],
				"an_image"=>"",
				"an_audio" =>"",
				"an_spell" => $data["an_spell".$i],
				"an_type" => $qu_type,
				"qu_id" =>$qu_id,
				"an_correct" =>$data["an_correct".$i]
				);
			if($qu_type==2){
				$input["an_correct"]=$input["an_content"];
			}	
			if($request->hasFile('an_image'.$i)) {
				
				$file =Input::file('an_image'.$i);
				//getting timestamp
				$timestamp = str_replace([' ', ':','-'], '', Carbon::now()->toDateTimeString());
				
				$extension = $file->getClientOriginalExtension();
				if(!$this->validateExtImage($extension)){
					return Redirect::back()->with('error', 'Cập nhật thất bại!');
				}
				$name =$timestamp.'.'.$extension;
				$destinationPath =   "/images/";		
				$file->move(public_path($destinationPath), $name);
				$input["an_image"]=$destinationPath.$name;
			
				
			}
			if($request->hasFile('an_audio'.$i)) {
				
				$file =Input::file('an_audio'.$i);
				//getting timestamp
				$timestamp = str_replace([' ', ':','-'], '',Carbon::now()->toDateTimeString());
				
				$extension = $file->getClientOriginalExtension();
				if(!$this->validateExtAudio($extension)){
					return Redirect::back()->with('error', 'Cập nhật thất bại!');
				}
				$name =$timestamp.'.'.$extension;
				$destinationPath =   "/audios/";		
				$file->move(public_path($destinationPath), $name);
				$input["an_audio"]=$destinationPath.$name;
				
			}
			
			Answer::create($input);	
		}
        
         return redirect()->route('questions.index')
            ->with('success','Image Uploaded successfully.');
    }
}

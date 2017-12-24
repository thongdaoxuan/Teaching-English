<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use DB;

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
        return view('questions.create');

    }

    public function upload( Request $request)
    {
        $this->validate($request, [
            'qu_content' => 'required',
            'qu_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'qu_audio' => 'required',
        ]);
        $input['qu_content'] = $request->qu_content;
        $a = "/images/".time().'.'.$request->qu_image->getClientOriginalExtension();
        $b = time().'.'.$request->qu_image->getClientOriginalExtension();
        $input['qu_image'] = $a;
        $request->qu_image->move(public_path('images'), $b);
        $c = "/audios/".time().'.'.$request->qu_audio->getClientOriginalExtension();
        $d = time().'.'.$request->qu_audio->getClientOriginalExtension();
        $input['qu_audio'] = $c;
        $request->qu_audio->move(public_path('audios'), $d);
        $input['qu_type'] = 1;


        $input['ca_id'] = $request->qu_id;

        Question::create($input);


        return back()
            ->with('success','Image Uploaded successfully.');
    }
    public function edit($id)
    {
        $questions = Question::find($id);
        return view('questions.edit',compact('question'))->with('questions', $questions);
    }
    public function addAnswer(Request $request){
            $a = "/images/".time().'a'.'.'.$request->an_image->getClientOriginalExtension();
            $b = time().'a'.'.'.$request->an_image->getClientOriginalExtension();
            $request->an_image->move(public_path('images'), $b);
            $c = "/audios/".time().'a'.'.'.$request->an_audio->getClientOriginalExtension();
            $d = time().'a'.'.'.$request->an_audio->getClientOriginalExtension();
            $request->an_audio->move(public_path('audios'), $d);

            $a1 = "/images/".time().'b'.'.'.$request->an_image1->getClientOriginalExtension();
            $b1 = time().'b'.'.'.$request->an_image1->getClientOriginalExtension();
            $request->an_image1->move(public_path('images'), $b1);
            $c1 = "/audios/".time().'b'.'.'.$request->an_audio1->getClientOriginalExtension();
            $d1 = time().'b'.'.'.$request->an_audio1->getClientOriginalExtension();
            $request->an_audio1->move(public_path('audios'), $d1);

            $a2 = "/images/".time().'c'.'.'.$request->an_image2->getClientOriginalExtension();
            $b2 = time().'c'.'.'.$request->an_image2->getClientOriginalExtension();
            $request->an_image2->move(public_path('images'), $b2);
            $c2 = "/audios/".time().'c'.'.'.$request->an_audio2->getClientOriginalExtension();
            $d2 = time().'c'.'.'.$request->an_audio2->getClientOriginalExtension();
            $request->an_audio2->move(public_path('audios'), $d2);
        DB::table('answer')->insert(array(
            array("an_content"=>$request->an_content,
                "an_image"=>$a,
                "an_audio" =>$c,
                "an_spell" => $request->an_spell,
                "an_type" => 1,
                "qu_id" => $request->qu_id,
                "an_correct" =>$request->an_correct
                ),
            array("an_content"=>$request->an_content1,
                "an_image"=>$a1,
                "an_audio" =>$c1,
                "an_spell" =>$request->an_spell1,
                "an_type" => 1,
                "qu_id" => $request->qu_id,
                "an_correct" =>$request->an_correct1
            ),
            array("an_content"=>$request->an_content2,
                "an_image"=>$a2,
                "an_audio" =>$c2,
                "an_spell" =>$request->an_spell2,
                "an_type" => 1,
                "qu_id" => $request->qu_id,
                "an_correct" =>$request->an_correct2
            ),
        ));
        return back()
            ->with('success','Image Uploaded successfully.');
    }
}

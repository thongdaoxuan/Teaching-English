@extends('layout')
@section('content')
  <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    List answers of question: {{$question->qu_content}}
                </header>
				
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
                <div class="panel-body">
					{!! Form::model($question, ['method' => 'PATCH','route' => ['answer.update', $question->qu_id], 'files' => true]) !!}
    
                       
						<input class="form-control" type="hidden" value="{{ $question->qu_id }}" name="qu_id" >
						<input class="form-control" type="hidden" value="{{ $question->qu_type }}" name="qu_type" >
						<?php if($question->qu_type==1){?>
							<div class="form-row">

								<div class="form-group col-md-4">
									<label for="inputEmail4">Content Answers</label>
									<input type="text" class="form-control" name="an_content0" id="inputEmail4" placeholder="Content Answers">
								</div>
								<div class="form-group col-md-2">
									<label for="inputPassword4">Image Answers</label>
									<input type="file" name="an_image0" class="form-control" placeholder="Image Answers">
								</div>
								<div class="form-group col-md-2">
									<label for="inputPassword4">Audio Answers</label>
									<input type="file" name="an_audio0" class="form-control"  placeholder="Image Answers">
								</div>
								<div class="form-group col-md-2">
									<label for="inputPassword4">Spell Answers</label>
									<input type="text" name="an_spell0" class="form-control" id="inputEmail4" placeholder="Spell Answers">
								</div>

								<div class="form-group col-md-1">
									<label for="inputPassword4">Correct</label>
									<input class="form-check-input form-control"  type="radio" value="true" name="an_correct0"  >
								</div>
							</div>
							<div class="form-row">

								<div class="form-group col-md-4">
									<input type="text" class="form-control" name="an_content1" id="an_content1" placeholder="Content Answers">
								</div>
								<div class="form-group col-md-2">
									<input type="file" name="an_image1" class="form-control" placeholder="Image Answers">
								</div>
								<div class="form-group col-md-2">
									<input type="file" name="an_audio1" class="form-control"  placeholder="Image Answers">
								</div>
								<div class="form-group col-md-2">
									<input type="text" name="an_spell1" class="form-control" id="an_spell1" placeholder="Spell Answers">
								</div>

								<div class="form-group col-md-1">
									<input class="form-check-input form-control"  type="radio" value="true" name="an_correct1"  >
								</div>
							</div>
							<div class="form-row">

								<div class="form-group col-md-4">
									<input type="text" class="form-control" name="an_content2" id="inputEmail4" placeholder="Content Answers">
								</div>
								<div class="form-group col-md-2">
									<input type="file" name="an_image2" class="form-control" placeholder="Image Answers">
								</div>
								<div class="form-group col-md-2">
									<input type="file" name="an_audio2" class="form-control"  placeholder="Image Answers">
								</div>
								<div class="form-group col-md-2">
									<input type="text" name="an_spell2" class="form-control" id="inputEmail4" placeholder="Spell Answers">
								</div>

								<div class="form-group col-md-1">
									<input class="form-check-input form-control"  type="radio" value="true" name="an_correct2"  >
								</div>
							</div>
						<?php }else if($question->qu_type==2){?>
							 <div class="form-row">

								<div class="form-group col-md-4">
									<label for="an_content">Content Answers</label>
									<input type="text" class="form-control" name="an_content0"  id="an_content" placeholder="Email">
								</div>
								<div class="form-group col-md-2">
									<label for="an_image">Image Answers</label>
									<input type="file" name="an_image0" id="an_image" class="form-control">
								</div>
								<div class="form-group col-md-2">
									<label for="an_audio">Audio Answers</label>
									<input type="file" name="an_audio0" id="an_audio" class="form-control">
								</div>
								<div class="form-group col-md-2">
									<label for="spell_answer">Spell Answers</label>
									<input type="text" name="an_spell0" class="form-control" id="spell_answer" placeholder="Spell Answers">
								</div>
								<input type="hidden" name="an_correct0" value="">
								
							</div>
						<?php  }?>
                        <button type="submit" class="btn btn-primary col-md-offset-6">Submit</button>
					{!! Form::close() !!}


                </div>
            </section>
        </div>
    </div>

@endsection
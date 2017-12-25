@extends('layout')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="icon_document_alt"></i>Forms</li>
                <li><i class="fa fa-files-o"></i>Add Question</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Form validations
                </header>
                <div class="panel-body">
                    <form action="{{ url('answers') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}


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
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Content Answers</label>
                                <input type="text" class="form-control" name="an_content" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Image Answers</label>
                                <input type="file" name="an_image" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Audio Answers</label>
                                <input type="file" name="an_audio" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputPassword4">Spell Answers</label>
                                <input type="text" name="an_spell" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>

                            <div class="form-group col-md-1">
                                <label for="inputPassword4">Correct</label>
                                <input class="form-check-input form-control"  type="radio" value="true" name="an_correct"  >
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-4">

                                <input type="text" class="form-control" name="an_content1" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-2">

                                <input type="file" name="an_image1" class="form-control">
                            </div>
                            <div class="form-group col-md-2">

                                <input type="file" name="an_audio1" class="form-control">
                            </div>
                            <div class="form-group col-md-2">

                                <input type="text" name="an_spell1" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>

                            <div class="form-group col-md-1">

                                <input class="form-check-input form-control"  type="radio" value="true" name="an_correct1"  >
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <input class="form-control" type="hidden" value="{{ $questions->qu_id }}" name="qu_id" >
                                <input type="text" class="form-control" name="an_content2" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-2">

                                <input type="file" name="an_image2" class="form-control">
                            </div>
                            <div class="form-group col-md-2">

                                <input type="file" name="an_audio2" class="form-control">
                            </div>
                            <div class="form-group col-md-2">

                                <input type="text" name="an_spell2" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>

                            <div class="form-group col-md-1">

                                <input class="form-check-input form-control"  type="radio" value="true" name="an_correct2"  >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary col-md-offset-6">Submit</button>

                    </form>


                </div>
            </section>
        </div>
    </div>
@endsection
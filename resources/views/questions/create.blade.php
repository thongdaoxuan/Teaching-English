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
                <form action="{{ url('questions') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
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
                            <label for="inputEmail4">Content Question</label>
                            <input type="text" class="form-control" name="qu_content" id="inputEmail4" placeholder="Content">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputPassword4">Image Question</label>
                            <input type="file" name="qu_image" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputPassword4">Audio Question</label>
                            <input type="file" name="qu_audio" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputPassword4">Category</label>
                            <div class="">
                                <select class="form-control" id="sel1" name = "qu_id" >
                                    @foreach($categories as $key => $value)
                                    <option value="{{ $value-> ca_id }}">{{ $value->ca_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputPassword4">Type Question</label>
                            <div class="">
                                <select class="form-control" id="sel1" name = "active" >
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary col-md-offset-11">Submit</button>
                </form>
                </div>
        </section>
    </div>
</div>
@endsection
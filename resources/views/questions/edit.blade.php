@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3 class="page-header"><i class="fa fa-pencil"></i> Edit Question</h3>
        </div>
    </div>
    </div>


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


    {!! Form::model($question , ['method' => 'PATCH','route' => ['questions.update', $question ->qu_id], 'files' => true]) !!}
        @include('questions.form')
    {!! Form::close() !!}
  

@endsection
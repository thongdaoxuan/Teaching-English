@extends('layout')
@section('content')


 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3 class="page-header"><i class="fa fa-add"></i> Add Category</h3>
            </div>
        </div>
    </div>
    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'questions.store','method'=>'POST', 'files' => true)) !!}
         @include('questions.form')
    {!! Form::close() !!}

@endsection
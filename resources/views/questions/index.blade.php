@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-user"></i>Question Form</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-book"></i>Forms</li>
            <li><i class="fa fa-users"></i>Questions</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Advanced Table
            </header>
            <div >
                <a class="btn btn-primary" href='questions/create' data-toggle="modal">
                    Add Question
                </a>
            </div>
            <table class="table table-striped table-advance table-hover">
                <tbody>
                <tr>
                    <th><i class="icon_profile"></i>  Content</th>
                    <th><i class="icon_image"> </i>   Image </th>
                    <th><i class="fa fa-headphones"></i>  Audio </th>
                    <th><i class="icon_mail_alt"></i>  Type</th>
                    <th><i class="icon_check"></i>  Category</th>
                    <!--<th><i class="icon_profile"></i> User_update</th>-->
                    <th><i class="icon_cogs"></i>  Action</th>
                    <th><i class="icon_cogs"></i>  Add Answer</th>
                </tr>
                    @foreach ($questions as $question)
                <tr>

                    <td>{{$question->qu_content}}</td>
                    <td><img src="{{ $question->qu_image }}" style="width : 100px; height : 100px"></td>
                    <td>
                        <audio controls>
                            <source src="{{ $question->qu_audio }}" type="audio/ogg">
                        </audio>
                    </td>

                    <td>{{$question->qu_type}}</td>
                    <td>{{$question->ca_id}}</td>

                    <td>
                        <div class="btn-group">

                            <a class="btn btn-success" href=""><i class="icon_pencil"></i></a>
                            <a class="btn btn-danger" href="" onclick="return confirm('Are you sure you want to delete this item?');"><i class="icon_close_alt2"></i></a>

                        </div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-primary" href='{{ route('questions.edit',$question->qu_id) }}'>AddAnswer</a>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    </div>
</div>
@endsection
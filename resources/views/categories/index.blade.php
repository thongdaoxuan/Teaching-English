@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-book"></i>Category Form</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-book"></i>Forms</li>
            <li><i class="fa fa-th-list"></i>Category Form</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Categories Table
            </header>
            <div >
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
            </div>
            <table class="table table-striped table-advance table-hover">
                <tbody>
                <tr>
                    <th><i class="icon_profile"></i> No</th>
                    <th><i class="icon_calendar"></i> Category Name</th>
                    <th><i class="icon_document"></i> Category Note</th>
                    <th><i class="icon_cogs"></i> Action</th>
                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $category->ca_name}}</td>
                        <td>{{ $category->ca_note}}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('categories.show',$category->ca_id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('categories.edit',$category->ca_id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $category->ca_id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $categories->links() !!}
        </section>
    </div>
</div>
@endsection

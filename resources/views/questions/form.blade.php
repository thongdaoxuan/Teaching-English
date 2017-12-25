
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{ route('categories.index') }}">Home</a></li>
        </ol>
    </div>
</div>
<!-- Form validations -->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Category
            </header>
            <div class="panel-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Category Name:</strong>
                        {!! Form::text('ca_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Category Note:</strong>
                        {!! Form::text('ca_note', null, array('placeholder' => 'Note','class' => 'form-control','style'=>'height:150px')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </section>
    </div>
</div>


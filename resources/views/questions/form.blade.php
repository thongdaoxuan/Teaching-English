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
                Question
            </header>
            <div class="panel-body">
                <div class="form-group col-md-4">
					<label for="qu_content">Content Question</label>
					{!! Form::text('qu_content', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
				</div>
				<div class="form-group col-md-2">
					<label for="qu_image">Image Question</label>
					{!! Form::file('qu_image') !!}
					
				</div>
				<div class="form-group col-md-2">
					<label for="qu_audio">Audio Question</label>
					{!! Form::file('qu_audio')!!}
				</div>
				<div class="form-group col-md-2">
					<label for="ca_id">Category</label>
					<div class="">
						<select class="form-control" id="ca_id" name = "ca_id" >
							@foreach($categories as $key => $value)
							<option value="{{ $value-> ca_id }}">{{ $value->ca_name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group col-md-2">
					<label for="qu_type">Type Question</label>
					<div class="">
						{!! Form::select('qu_type', array(
							'1' =>  'Chon dap an dung',
							'2' =>  'Dien tu',
						))!!}
						
					</div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </section>
    </div>
</div>


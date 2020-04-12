@extends('admin.layout.main')
@section('title') Trang chủ
@endsection
@section('content')
<div class="col-7 m-auto">
	<div class="card">
		<div class="card-header text-center font-weight-bold">
			Create New About
		</div>
		<div class="card-body">
			{{ Form::open(['url' => 'admin/about', 'method' => 'post','enctype '=>'multipart/form-data']) }}
			<div class="row ">
				
				<div class="form-group col-6 {{ $errors->has('title') ?'has-error':'' }}">
					{{ Form::label('title','Title : ')}}
					{{ Form::text('title','',['class'=>'form-control'])}}
					<span class="text-danger">{{ $errors->first('title')}}</span>
				</div>

				<div class="form-group col-6 {{ $errors->has('phone') ?'has-error':'' }}">
					{{ Form::label('phone','Phone Number : ')}}
					{{ Form::text('phone','',['class'=>'form-control'])}}
					<span class="text-danger">{{ $errors->first('phone')}}</span>
				</div>	

				<div class="form-group col-6 {{ $errors->has('content') ?'has-error':'' }}">
					{{ Form::label('content','Content: ')}}
					{{ Form::text('content','',['class'=>'form-control'])}}
					<span class="text-danger">{{ $errors->first('content')}}</span>
				</div>

				<div class="form-group col-6 {{ $errors->has('email') ?'has-error':'' }}">
					{{ Form::label('email','Email : ')}}
					{{ Form::text('email','',['class'=>'form-control'])}}
					<span class="text-danger">{{ $errors->first('email')}}</span>
				</div>

				<div class="form-group col-6 ">
					{{Form::label('Logo:','',['class'=>'font-weight-bold'])}}
					<input multiple="multiple" name="logo" type="file" class="form-control">
					<span class="text-danger">{{ $errors->first('logo')}}</span>
				</div>

				<div class="form-group col-6 ">
					{{ Form::label('created_by','Create_by : ')}}
					{{ Form::text('created_by','',['class'=>'form-control'])}}
				</div>

				<div class="form-group col-6 ">
					{{ Form::label('updated_by','Update_by : ')}}
					{{ Form::text('updated_by','',['class'=>'form-control'])}}
				</div>
			</div>

			<div class="form-group">
				{{ Form::submit('Save',['class'=>'btn btn-outline-secondary']) }}
				<a class="btn btn-outline-secondary" href="{{route('about.index')}}">Back</a>
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection
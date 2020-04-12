@extends('admin.layout.main')
@section('title') Trang chủ
@endsection
@section('content')
<div class="col-7 m-auto">
	<div class="card">
		<div class="card-header text-center font-weight-bold">
			Edit Infomation
		</div>
		<div class="card-body">	
	{{Form::open(['route'=>['slide.update',$slide->id],'method'=>'put'])}}
	<div class="row ">
	<div class="form-group col-6 {{ $errors->has('link') ?'has-error':'' }}">
			{{ Form::label('link','Link : ') }}
			{{ Form::text('link',$slide->link,['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('link')}}</span>
		</div>

		<div class="form-group col-6 {{ $errors->has('url_img') ?'has-error':'' }}">
			{{ Form::label('url_img','Url img : ')}}
			{{ Form::text('url_img',$slide->url_img,['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('url_img')}}</span>
		</div>	

		<div class="form-group col-6 {{ $errors->has('display_order') ?'has-error':'' }}">
			{{ Form::label('display_order','DisPlay Order : ')}}
			{{ Form::text('display_order',$slide->display_order,['class'=>'form-control'])}}
			<span class="text-danger">{{ $errors->first('display_order')}}</span>
		</div>
	</div>
	<div class="form-group">
		{{ Form::submit('Save',['class'=>'btn btn-outline-secondary']) }}
		<a class="btn btn-outline-secondary" href="{{route('slide.index')}}">Back</a>
	</div>
	{{ Form::close() }}
		</div>
	</div>
</div>
@endsection
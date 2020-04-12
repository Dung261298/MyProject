	@extends('admin.layout.main')
	<div class="col-7 m-auto">
		
		<div class="card">
			<div class="card-header text-center font-weight-bold">Details
			</div>
			<div class="card-body">
			<div class="page-header mt-2">
	    </div>
	<div class="ml-3">
		<p><b>Title: </b>{{$about->title}}</p>
		<p><b>Phone Number: </b>{{$about->phone}}</p>
		<p><b>Content: </b>{{$about->content}}</p>
		<p><b>Email: </b>{{$about->email}}</p>
		<p><b>Logo: </b><img src="{{ asset('image/'.$about->logo) }}" width="80" height=></img></p>
		<a class="btn btn-outline-secondary" href="{{route('about.index')}}">Back</a>
	</div>
	
			</div>
		</div>
	</div>


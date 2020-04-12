@extends('admin.layout.main')
	<div class="col-7 m-auto">
		<div class="card">
			<div class="card-header text-center font-weight-bold">Details
			</div>
			<div class="card-body">
				<div class="page-header mt-2">
				</div>
				<div class="ml-3">
					<p><b>Link: </b>{{$slide->link}}</p>
					<p><b>Url img: </b>{{$slide->url_img}}</p>
					<p><b>Display Order: </b>{{$slide->display_order}}</p>
					<a class="btn btn-outline-secondary" href="{{route('slide.index')}}">Back</a>
			</div>
		</div>
	</div>
</div>


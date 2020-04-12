@extends('admin.layout.main')
@section('title') Trang chủ
@endsection
@section('content')
<div class="mt-2">
    <h4 class="mt-2 ">About</h4>
    <div class="row ml-1">
        @if (Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message')}}</p> 
        @elseif(Session::has('err'))    
        <p class="alert alert-danger">{{ Session::get('err')}}</p>
        @endif
    </div>
    <div class="">
        <div class="row">
            <div class="col-9">
                <a href="{{route('about.create')}}" class="btn btn-outline-secondary mb-2 mt-2">Create New</a>
            </div>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th >STT</th>
                <th >Title</th>
                <th >Phone Number</th>
                <th >Content</th>
                <th >Email</th>
                <th >Logo</th>
                <th colspan="5">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($abouts as $key => $about)
                <tr>
                    <td >{{ ++$key }}</td>
                    <td>{{$about->title}}</td>
                    <td>{{$about->phone}}</td>
                    <td>{{$about->content}}</td>
                    <td>{{$about->email}}</td>
                    <td><img src="{{ asset('image/'.$about->logo) }}" width="80" height=></img>
                    </td>
                    <td colspan="5">
                        {{Form::open(['route' => ['about.destroy', $about->id], 'method' => 'DELETE'])}}
                        {{ Form::button('<i class="fas fa-trash-alt text-danger " ></i>', ['type' => 'submit', 'class' => 'text-danger border-0 btn-link float-left'] )  }} 
                        {{ Form::close() }}
                        <a href="{{route('about.edit',$about->id)}}" class="ml-1"><i class="far fa-edit "></i></a>
                        <a href="{{route('about.show',$about->id)}}" class="ml-1"><i class="fas fa-info-circle"></i></a>
                    </td>
                </tr>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection

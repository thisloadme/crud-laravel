@extends('posts.master')

@section('content')
	<h3>Add New Post</h3>

	@if(count($errors) > 0)
		<strong>Error</strong>
		<ul>
			@foreach($errors->all() as $err)
				<li>{{$err}}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::open([
			'route' => 'posts.store',
			'method' => 'POST',
		]) 
	!!}

@include('posts.form')

	{!! Form::close() !!}


@endsection
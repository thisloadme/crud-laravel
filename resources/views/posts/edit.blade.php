@extends('posts.master')

@section('content')
	<h3>Edit Post</h3>

	@if(count($errors) > 0)
		<strong>Error</strong>
		<ul>
			@foreach($errors->all() as $err)
				<li>{{$err}}</li>
			@endforeach
		</ul>
	@endif

	{!! Form::model($post, ['method'=>'PATCH', 'route'=>['posts.update', $post->id]])
	!!}

@include('posts.form')

	{!! Form::close() !!}


@endsection
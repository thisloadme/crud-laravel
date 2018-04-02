@extends('posts.master')

@section('content')

	<h3>Show content</h3>
	<a href="{{ route('posts.index') }}">Back</a>

	<br><br>

	<p>Title : {{ $post->title }}</p><br>
	<p>Body : {{ $post->body }}</p>

@endsection
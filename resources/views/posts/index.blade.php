@extends('posts.master')

@section('content')
<div style="position: fixed; margin: 100px 100px 100px 100px;left: 300px">
	<center>
	<h3>Coba Coba</h3>

	<a href="{{ route('posts.create') }}">Create new post</a>
	</center>


	@if($message = Session::get('success'))
		<p style="color: red">{{ $message }}</p>
	@endif

	<table border="1px">
		<tr>
			<th>No.</th>
			<th>Title</th>
			<th>Body</th>
			<th width="250px">Action</th>
		</tr>

		@foreach($posts as $p)

		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $p->title }}</td>
			<td>{{ $p->body }}</td>
			<td>
				<a style="margin-left: 30px" href="{{route('posts.show', $p->id)}}">Show</a>
				<a style="margin-left: 30px" href="{{route('posts.edit', $p->id)}}">Edit</a>

				{!! Form::open([
					'method' => 'DELETE', 
					'route' => ['posts.destroy', $p->id], 
					'style' => 'display:inline;margin-left:30px;']) 
				!!}

				{!! Form::submit('Delete',['style' => 'color:red;']) !!}

				{!! Form::close() !!}
			</td>
		</tr>

		@endforeach

	</table>
	
	{!! $posts->links() !!}
</div>
@endsection
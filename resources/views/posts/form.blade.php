<strong>Title :</strong>
{!! Form::text('title', null, ['placeholder'=>'Title']) !!}
<br>
<strong>Body :</strong>
{!! Form::textarea('body', null, ['placeholder'=>'Body', 'style'=>'height:200px;']) !!}
<br>
<a href="{{ route('posts.index') }}">Back</a><br>
<button type="submit" name="button">Submit</button>
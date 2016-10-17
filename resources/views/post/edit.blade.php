@extends('layouts.main')

@section('title','| Update New Post')


@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Update Post</h1>
		<hr>
			{!! Form::open(['route' => ['post.update','id' => $post->id],'method' => 'PUT']) !!}
	    			{!! Form::label('Name', 'Name:') !!}
	    			{!! Form::text('name',$post->title,['class' => 'form-control']) !!}
    			<br>
    			{!! Form::label('slug', 'Slug:') !!}
	    			{!! Form::text('slug',$post->slug,['class' => 'form-control']) !!}
	    			<br>
	    			{!! Form::label('Body', 'Body:') !!}
	    			{!! Form::textarea('body',$post->body,['class' => 'form-control']) !!}
    			<br>
    				{!! Form::submit('Update',['class' => 'btn btn-success btn-lg btn-block'])!!}
			{!! Form::close() !!}
	</div>	
</div>

@endsection
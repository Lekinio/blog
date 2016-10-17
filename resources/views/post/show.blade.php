@extends('layouts.main')

@section('title', $post->title)

@section('content')
	<div class="row">
		<div class="col-md-8">	
			<h1>{{ $post->title }}</h1>

				<p>{{ $post->body }}</p>
				<br>
				
					<br>
				
		</div>

		<div class="col-md-4">
			<div class="well">
			<dl class="dl-horizontal">
					  <dt>Slug:</dt>
					  <dd><a href="{{ url($post->slug)}}">{{$post->slug}}</a></dd>
				</dl>
				<dl class="dl-horizontal">
					  <dt>Created At:</dt>
					  <dd>{{ $post->created_at->format('M j, Y H:i') }}</dd>
				</dl>

				<dl class="dl-horizontal">
					  <dt>Last Time Updated:</dt>
					  <dd>{{ $post->updated_at->format('M j, Y H:i') }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6"><a class="btn btn-warning btn-block" href="/post/{{$post->id}}/edit">Edit</a></div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['post.destroy','id' => $post->id],'method' => 'DELETE']) !!}
	    				{!! Form::submit('Delete',['class' => 'btn btn-block btn-danger'])!!}
				{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>			
@endsection
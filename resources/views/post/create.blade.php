@extends('layouts.main')

@section('title','| Create New Post')


@section('content')

@if ($errors->all())
	<div class="alert alert-danger">
		<strong>Errors:</strong>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
	</div>
@endif
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Create New Post</h1>
		<hr>
			{!! Form::open(['route' => 'post.store','data-parsley-validate' => '']) !!}
	    			{!! Form::label('Name', 'Name:') !!}
	    			{!! Form::text('name',null,['class' => 'form-control','required' => '','Maxlength' => '255']) !!}
    			<br>
    			{!! Form::label('slug', 'Slug:') !!}
	    			{!! Form::text('slug',null,['class' => 'form-control','required' => '','Maxlength' => '255']) !!}
	    			<br>
	    			{!! Form::label('Body', 'Body:') !!}
	    			{!! Form::textarea('body',null,['class' => 'form-control','required' => '']) !!}
    			<br>
    				{!! Form::submit('Create',['class' => 'btn btn-success btn-lg btn-block'])!!}
			{!! Form::close() !!}
	</div>	
</div>

@endsection
@extends('layouts.main')

@section('title', 'Index')

@section('content')

		

		<div class="row">
			<div class="col-md-10">
				<h1>All Posts</h1>
			</div>
			<div class="col-md-2">
				<a href="/post/create" class="btn btn-primary btn-lg">Create New Post</a>
			</div>

			<div class="col-md-12">
				<hr>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>#</th>
						<th>Title</th>
						<th>slug</th>
						<th>Body</th>
						<th>Created At</th>
						<th></th>
					</thead>
				<tbody>
				@foreach($post as $posts)
					<tr>
						
						<td>{{ $posts->id }}</td>
						<td>{{ $posts->title }}</td>
						<td>{{ substr($posts->slug,0,15) }}</td>
						<td>{{ substr($posts->body,0,50)}}{{strlen($posts->body) > 50 ? '...' : ''}}</td>
						<td>{{ date('j M,Y',strtotime($posts->created_at)) }}</td>
						<td><a class="btn btn-info" href="/post/{{ $posts->id }}">View</a></td>
						
					</tr>
						@endforeach
					</tbody>
				</table>
				{{ $post->links() }}
			</div>
		</div>
@endsection
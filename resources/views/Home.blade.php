@extends('layouts.main')

@section('title','Home')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog!</h1>
                <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>
    <!-- end of header .row -->

    <div class="row">
        <div class="col-md-8">
        @foreach($post as $posts)
            <div class="post">
                <h3><a href="/post/{{ $posts->id }}">{{ $posts->title }}</a></h3>
                <p>{{ $posts->body }}</p>
                <a href="/post/{{ $posts->id }}" class="btn btn-primary">Read More</a>
            </div>
        
            <hr>

            
        @endforeach
                
        </div>  

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection
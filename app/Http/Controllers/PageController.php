<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PageController extends Controller
{
		public function __construct(Post $post){
			$this->post = $post;
		}

    public function index(){

    	$post = $this->post->orderBy('created_at','desc')->limit(6)->get();

    	return view('Home',compact('post'));
    }

    public function contact(){


    		return view('contact');
    }

    public function about(){
    		return view('about');
    }
}

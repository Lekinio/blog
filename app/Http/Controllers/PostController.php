<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use  App\Http\Requests\PostRequest;

use App\Console\Commands\StorePostCommand;
use App\Console\Commands\UpdatePostCommand;
use App\Console\Commands\DeletePostCommand;
use App\Post;

use Session;

class PostController extends Controller
{

    public function __construct(Post $post){
            $this->post = $post;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = $this->post->orderBy('id','desc')->paginate(5);
      
        return view('post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PostRequest $request)
    {
        $name = $request->input('name');
        $body = $request->input('body');
        $slug = $request->input('slug');
         
        $command = new StorePostCommand($name,$body,$slug);

        $this->dispatch($command);

        return redirect()->route('post.index');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->post->find($id);

        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->post->find($id);

        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PostRequest $request,$id)
    {
         $name = $request->input('name');
        $body = $request->input('body');
        $slug = $request->input('slug');
         
        $command = new UpdatePostCommand($id,$name,$body,$slug);

        $this->dispatch($command);

            
        return redirect()->route('post.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $command = new DeletePostCommand($id);

        $this->dispatch($command);

        return redirect()->route('post.index');
    }
}

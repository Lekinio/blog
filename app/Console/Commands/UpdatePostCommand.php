<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Post;

class UpdatePostCommand extends Command
{

        public $name;
        public $title;
        public $id;
        public $slug;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($id,$name,$body,$slug)
    {
        $this->id = $id;
        $this->name = $name;
        $this->body = $body;
        $this->slug = $slug;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return Post::where('id',$this->id)->update(['title'=> $this->name,'body' => $this->body,'slug' => $this->slug]);
    }
}

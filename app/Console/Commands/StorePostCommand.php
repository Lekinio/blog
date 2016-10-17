<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Post;

class StorePostCommand extends Command
{
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

    public $name;
    public $body;
    public $slug;
    public function __construct($name,$body,$slug)
    {
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
        return Post::create(['title' => $this->name, 'body' => $this->body,'slug' => $this->slug]);
    }
}

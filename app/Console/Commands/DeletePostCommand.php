<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Post;

class DeletePostCommand extends Command
{

    public $id;
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
    public function __construct($id)
    {
        $this->id = $id;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        return Post::where('id',$this->id)->delete();
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Order;
use App\User;


class DeleteOrdersId extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:deleteoid';

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
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {  
    $users = User::all();
    foreach($users as $user){
    $user->update(['order_id' => null]);
    }
    }
}
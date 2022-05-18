<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class generateUserData extends Command
{
   //cú pháp command
    protected $signature = 'create:generate-users {count}';

   //mo ta
    protected $description = 'Creates test user data and insert into the database.';

    public function __construct()
    {
        parent::__construct();
    }
    
    //thuc thi lenh
    public function handle()
    {
        $usersData = $this->argument('count');
        for ($i = 0; $i < $usersData; $i++) { 
            User::factory()->create();
        }          
    }
}

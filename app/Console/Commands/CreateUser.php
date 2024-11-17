<?php

namespace App\Console\Commands;

use App\Models\User;
use Hash;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name} {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
{
    $name = $this->argument('name');
    $email = $this->argument('email');

    $user = User::create([
        'name' => $name,
        'email' => $email,
        'password' => Hash::make('password'),
    ]);

    $this->info("User created successfully: {$user->id} - {$user->name}");
}
}

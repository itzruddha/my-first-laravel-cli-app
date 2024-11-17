<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AddNote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'note:add {user_id} {content}';

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
    $userId = $this->argument('user_id');
    $content = $this->argument('content');

    $user = User::find($userId);

    if (!$user) {
        $this->error('User not found!');
        return;
    }

    $note = $user->notes()->create(['content' => $content]);

    $this->info("Note added successfully: {$note->id}");
}
}

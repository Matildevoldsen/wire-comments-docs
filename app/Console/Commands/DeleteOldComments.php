<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use WireComments\Models\Comment;

class DeleteOldComments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comments:delete-old';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete comments older than a specific time';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Comment::all()->each(function (Comment $comment) {
            $comment->delete();
        });

        $this->info('Old comments deleted successfully.');
        return 0;
    }
}

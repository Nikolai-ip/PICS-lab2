<?php

namespace App\Console\Commands;
use App\Models\Tag;

use Illuminate\Console\Command;

class TagCountCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tag:count {id}';

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
        $tagId = $this->argument('id');

        $tag = Tag::find($tagId);
    
        if (!$tag) {
            throw new \InvalidArgumentException('Tag not found');
        }
    
        $articleCount = $tag->articles()->count();
    
        $this->info("Number of articles associated with tag ID {$tagId}: {$articleCount}");
    }
}

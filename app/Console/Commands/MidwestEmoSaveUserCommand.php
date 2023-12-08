<?php

namespace App\Console\Commands;

use App\Jobs\SaveUserJob;
use Illuminate\Console\Command;

class MidwestEmoSaveUserCommand extends Command
{

    protected $signature = 'midwest:save-emo';

    protected $description = 'Command description';

    public function handle(): void
    {
         SaveUserJob::dispatch(
            db: 'midwestemo',
            name: 'MidwestEmo User',
            email: 'bagaça@emo.com'
        );
    }
}

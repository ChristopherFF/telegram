<?php

namespace App\Console\Commands;

use App\Traits\TelegramApiTrait;
use Illuminate\Console\Command;

class sendMessage extends Command
{

    use TelegramApiTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telegram:send-message';

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
     * @return int
     */
    public function handle()
    {
        $this->sendMessage();
        return 0;
    }
}

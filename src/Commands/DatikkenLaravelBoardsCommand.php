<?php

namespace Datikken\DatikkenLaravelBoards\Commands;

use Illuminate\Console\Command;

class DatikkenLaravelBoardsCommand extends Command
{
    public $signature = 'datikken_boards';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}

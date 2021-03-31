<?php

namespace Datikken\DatikkenLaravelBoards;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Datikken\DatikkenLaravelBoards\DatikkenLaravelBoards
 */
class DatikkenLaravelBoardsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'datikken_laravel_boards';
    }
}

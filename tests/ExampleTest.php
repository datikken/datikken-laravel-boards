<?php

namespace Datikken\DatikkenLaravelBoards\Tests;

class ExampleTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        dd(config('database'));

        $this->assertTrue(true);
    }
}

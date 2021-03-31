<?php

use Datikken\DatikkenLaravelBoards\Tests\TestCase;

class SkeletonCommandTest extends TestCase
{
    /** @test */
    public function the_skeleton_command_works()
    {
        $this->artisan('datikken_boards')->assertExitCode(0);
    }
}

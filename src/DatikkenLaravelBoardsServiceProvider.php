<?php

namespace Datikken\DatikkenLaravelBoards;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Datikken\DatikkenLaravelBoards\Commands\DatikkenLaravelBoardsCommand;

class DatikkenLaravelBoardsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('datikken_boards')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_datikken_laravel_boards_table')
            ->hasCommand(DatikkenLaravelBoardsCommand::class);
    }
}

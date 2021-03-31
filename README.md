# Kanban boards package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/datikken/datikken_laravel_boards.svg?style=flat-square)](https://packagist.org/packages/datikken/datikken_laravel_boards)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/datikken/datikken_laravel_boards/run-tests?label=tests)](https://github.com/datikken/datikken_laravel_boards/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/datikken/datikken_laravel_boards/Check%20&%20fix%20styling?label=code%20style)](https://github.com/datikken/datikken_laravel_boards/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/datikken/datikken_laravel_boards.svg?style=flat-square)](https://packagist.org/packages/datikken/datikken_laravel_boards)

[](delete) 1) manually replace `datikken, datikken, auhor@domain.com, datikken, datikken, Vendor Name, datikken-laravel-boards, datikken_laravel_boards, datikken_laravel_boards, DatikkenLaravelBoards, Kanban boards package` with their correct values
[](delete) in `CHANGELOG.md, LICENSE.md, README.md, ExampleTest.php, ModelFactory.php, DatikkenLaravelBoards.php, DatikkenLaravelBoardsCommand.php, DatikkenLaravelBoardsFacade.php, DatikkenLaravelBoardsServiceProvider.php, TestCase.php, composer.json, create_datikken_laravel_boards_table.php.stub`
[](delete) and delete `configure-datikken_laravel_boards.sh`

[](delete) 2) You can also run `./configure-datikken_laravel_boards.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-datikken_laravel_boards-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-datikken_laravel_boards-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require datikken/datikken_laravel_boards
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Datikken\DatikkenLaravelBoards\DatikkenLaravelBoardsServiceProvider" --tag="datikken_laravel_boards-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Datikken\DatikkenLaravelBoards\DatikkenLaravelBoardsServiceProvider" --tag="datikken_laravel_boards-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$datikken_laravel_boards = new Datikken\DatikkenLaravelBoards();
echo $datikken_laravel_boards->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [datikken](https://github.com/datikken)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

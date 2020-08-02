# 簡介

本套件將常用的雜湊命名函式加入你的 Laravel 專案. 你可以使用下述範例取得一個哈希目錄結構.

```php
$input = 'value';

$this->testClass->generateHashedDirectoryPath($input);
```

## Installation

You can install the package via composer:

```bash
composer require vswteam/laravel-hashed-naming
```

## Usage

``` php
use VSWTeam\LaravelHashedNaming\HashedNamingTrait;

class TestClass {
    use HashedNamingTrait;
}
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

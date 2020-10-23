# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rifrocket/trait-console.svg?style=flat-square)](https://packagist.org/packages/rifrocket/trait-console)
[![Build Status](https://img.shields.io/travis/rifrocket/trait-console/master.svg?style=flat-square)](https://travis-ci.org/rifrocket/trait-console)
[![Quality Score](https://img.shields.io/scrutinizer/g/rifrocket/trait-console.svg?style=flat-square)](https://scrutinizer-ci.com/g/rifrocket/trait-console)
[![Total Downloads](https://img.shields.io/packagist/dt/rifrocket/trait-console.svg?style=flat-square)](https://packagist.org/packages/rifrocket/trait-console)

Laravel does not provide the command to create Traits out of the box but Laravel does provide commands generation for almost all kinds of components. This package introduces the convenience of Laravel's artisan makes for trait generation.
## Installation

You can install the package via composer:

```bash
composer require rifrocket/trait-console
```
### Registering the service provider
For Laravel 5.4 and lower, add the following line to your config/app.php
``` php
Rifrocket\TraitConsole\TraitConsoleServiceProvider::class,
```

## Usage
trait will be created in the App/Traits directory.
```bash
php artisan make:trait NameOfYourTrait
```
You may create traits in subdirectories to organize them as per your need 
```bash
php artisan make:trait Subdirectory/NameOfYourTrait
```
trait will be created in the App/Traits/Subdirectory directory and namespaced appropriately.

### Arguments
-b or --boot
```bash
php artisan make:trait NameOfYourTrait -b
```
Creates a trait with a boot method.

-s or --scope
```bash
php artisan make:trait NameOfYourTrait -s
```
Creates a trait with a scope method.



## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email developer.tech.dev@gmail.com instead of using the issue tracker.

## Credits

- [Mohammad Arif](https://github.com/rifrocket)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).

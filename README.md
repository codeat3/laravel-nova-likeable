# A laravel nova package for the `rtconner/laravel-likeable`

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codeat3/laravel-nova-likeable.svg?style=flat-square)](https://packagist.org/packages/codeat3/laravel-nova-likeable)
[![Build Status](https://img.shields.io/travis/codeat3/laravel-nova-likeable/master.svg?style=flat-square)](https://travis-ci.org/codeat3/laravel-nova-likeable)
[![Quality Score](https://img.shields.io/scrutinizer/g/codeat3/laravel-nova-likeable.svg?style=flat-square)](https://scrutinizer-ci.com/g/codeat3/laravel-nova-likeable)
[![Total Downloads](https://img.shields.io/packagist/dt/codeat3/laravel-nova-likeable.svg?style=flat-square)](https://packagist.org/packages/codeat3/laravel-nova-likeable)

A nova resource package of `rtconner/laravel-likeable` for your `laravel/nova` application.

## Installation

You can install the package via composer:

```bash
composer require codeat3/laravel-nova-likeable
```

## Usage
If you have a Nova resource `Post` on which you have used the trait `Likeable`, you can simply add the line in the Nova resource.

``` php
    class Post extends Resource {
        ...
        public function fields(Request $request)
        {
            return [
                ...
                MorphMany::make('Likes', 'likes', \Codeat3\LaravelNovaLikeable\Resources\Like::class),
            ];
        }
    }


```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email swapnilsarwe@gmail.com instead of using the issue tracker.

## Credits

- [Swapnil Sarwe](https://github.com/codeat3)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
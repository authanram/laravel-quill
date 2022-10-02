# 👷 Work in progress

[![Latest Version on Packagist](https://img.shields.io/packagist/v/authanram/laravel-quill.svg?style=flat-square)](https://packagist.org/packages/authanram/laravel-quill)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/authanram/laravel-quill/run-tests?label=tests)](https://github.com/authanram/laravel-quill/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/authanram/laravel-quill/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/authanram/laravel-quill/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/authanram/laravel-quill.svg?style=flat-square)](https://packagist.org/packages/authanram/laravel-quill)

Integrates the [Quill rich text editor](https://quilljs.com) as blade component.

## Installation

You can install the package via composer:

```bash
composer require authanram/laravel-quill
```

Optionally, you can publish the views using:

```bash
php artisan vendor:publish --tag="laravel-quill-views"
```

## Usage

```html
<x-laravel-quill :options="['focus' => true]">
    <p>Hello World!</p>
</x-laravel-quill>
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

Please review [our security policy](security/policy) on how to report security vulnerabilities.

## Credits

- [Daniel Seuffer](https://github.com/authanram)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

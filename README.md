# Inherit any setting from any model infinitely deep

[![Latest Version on Packagist](https://img.shields.io/packagist/v/oceceli/inheritable-model-settings.svg?style=flat-square)](https://packagist.org/packages/oceceli/inheritable-model-settings)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/oceceli/inheritable-model-settings/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/oceceli/inheritable-model-settings/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/oceceli/inheritable-model-settings/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/oceceli/inheritable-model-settings/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/oceceli/inheritable-model-settings.svg?style=flat-square)](https://packagist.org/packages/oceceli/inheritable-model-settings)

The package offers an unprecedented level of flexibility, allowing users to inherit settings from any model infinitely deep. This capability empowers users to combine and extend configurations to suit their specific requirements. You can also set default values for settings that are not inherited from any model.

## Todo
- [ ] Add tests
- [ ] Caching

## Installation

You can install the package via composer:

```bash
composer require oceceli/inheritable-model-settings
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="inheritable-model-settings-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="inheritable-model-settings-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="inheritable-model-settings-views"
```

## Usage
Add the `HasSettings` trait and `Adjustable` interface to any model you want to have settings.

### Setting a value

```php
$model->setSetting('key', 'value');
```

### Getting a value

```php
$model->getSetting('key');
```

### Getting all settings

```php
$model->settings;
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [oceceli](https://github.com/oceceli)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

<h1 align="center">Lara Zeus Sky</h1>

<p align="center">
<a href="https://larazeus.com"><img src="https://larazeus.com/images/sky-banner.png" /></a>
</p>

<p align="center">

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lara-zeus/sky.svg?style=flat)](https://packagist.org/packages/lara-zeus/sky)
[![Tests](https://img.shields.io/github/actions/workflow/status/lara-zeus/sky/run-tests.yml?label=tests&style=flat&branch=main)](https://github.com/lara-zeus/sky/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Code Style](https://img.shields.io/github/actions/workflow/status/lara-zeus/sky/fix-php-code-style-issues.yml?label=code-style&style=flat)](https://github.com/lara-zeus/sky/actions?query=workflow%3Afix-php-code-style-issues+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lara-zeus/sky.svg?style=flat)](https://packagist.org/packages/lara-zeus/sky)
[![Total Downloads](https://img.shields.io/github/stars/lara-zeus/sky?style=flat)](https://github.com/lara-zeus/sky)

</p>

Lara-zeus sky is simple CMS for your website. it include posts, pages, tags, and categories.
>small tasks can be time-consuming, let us build these for you,

## Support Filament

<a href="https://github.com/sponsors/danharrin">
<img width="320" alt="filament-logo" src="https://filamentadmin.com/images/sponsor-banner.jpg">
</a>

## features
- 🔥 built with [TALL stack](https://tallstack.dev/)
- 🔥 using [filament](https://filamentadmin.com) as an admin panel
- 🔥 FrontEnd scaffolding, highly customizable.
- 🔥 all models are translatable.
  - sticky posts
  - recent posts
  - pages list
- 🔥 pages for static content like about us.
  - support child pages, with ordering.
- 🔥 posts, with some SEO options
  - sticky posts
  - password protections
  - multiple tags and categories
  - Featured Image

and more in the way.

## Demo

> visit our demo site: https://demo.larazeus.com

> visit our website to get the full documentation: https://larazeus.com/sky

## Installation

You can install the package via composer:

```bash
composer require lara-zeus/sky
```

run the commands:

```bash
php artisan vendor:publish --provider="LaraZeus\Sky\SkyServiceProvider" --tag=zeus-sky-migrations
php artisan vendor:publish --provider="Spatie\Tags\TagsServiceProvider" --tag="tags-migrations"
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"
php artisan vendor:publish --tag="filament-forms-tinyeditor-assets"
```

then run the migration
```bash
php artisan migrate
```
## Usage

visit the url `/admin` to manage the Letters, and `/blog`.

## Full Documentation

> visit our website to get the full documentation: https://larazeus.com/sky

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Support
available support channels:
* using our channel `#sky` on [Discord](https://filamentphp.com/discord)
* open an issue on [GitHub](https://github.com/lara-zeus/sky/issues)
* email us using the [contact center](https://atm-code.com/contact-us/lara-zeus)

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email wh7r.com@gmail.com instead of using the issue tracker.

## Credits

-   [Ashraf Monshi](https://github.com/atmonshi)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

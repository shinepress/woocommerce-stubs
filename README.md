# shinepress/woocommerce-stubs

[![Latest Version](https://img.shields.io/packagist/v/shinepress/woocommerce-stubs?label=latest)](https://packagist.org/packages/shinepress/woocommerce-stubs/)
[![Downloads](https://img.shields.io/packagist/dt/shinepress/woocommerce-stubs?label=downloads)](https://packagist.org/packages/shinepress/woocommerce-stubs/)


## Description

WooCommerce function and class declaration stubs for static analysis split into multiple files for increased performance. Automatically generated from the [woocommerce-stubs.php](https://github.com/php-stubs/woocommerce-stubs/blob/master/woocommerce-stubs.php) stubfile in [php-stubs/woocommerce-stubs](https://github.com/php-stubs/woocommerce-stubs/).


## Installation

The recommendend installation method is with composer:
```sh
$ composer require --dev shinepress/woocommerce-stubs
```

**Note:** only tagged versions are functional, dev-main will not provide any stubfiles.


## Usage

Just register the autoloader as a bootstrap file in your phpstan config:
```yaml
parameters:
    bootstrapFiles:
        - ./vendor/shinepress/woocommerce-stubs/autoload.php
```


## Acknowledgements

The project is made possible by:
* [php-stubs/woocommerce-stubs](https://packagist.org/packages/php-stubs/woocommerce-stubs) ([Viktor Szépe](https://github.com/szepeviktor))
* [czproject/git-php](https://packagist.org/packages/czproject/git-php) ([Jan Pecha](https://github.com/janpecha))
* [nikic/php-parser](https://packagist.org/packages/nikic/php-parser) ([Nikita Popov](https://github.com/nikic))
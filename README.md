# Devaloka Translation [![Build Status](https://travis-ci.org/devaloka/devaloka-translation.svg?branch=master)](https://travis-ci.org/devaloka/devaloka-translation) [![Packagist](https://img.shields.io/packagist/v/devaloka/devaloka-translation.svg)](https://packagist.org/packages/devaloka/devaloka-translation)

A WordPress plugin that provides an implementation of Symfony
TranslationInterface for WordPress.

## Features

*   An implementation of [TranslationInterface](https://github.com/symfony/translation)
    for WordPress

*   TranslatableInterface, TranslatableTrait for WordPress Plugin/Theme

## Requirements

*   [Devaloka](https://github.com/devaloka/devaloka)
*   [Symfony Translation Component](https://github.com/symfony/translation)

## Installation

1.  Install via Composer.

    ```sh
    composer require devaloka/devaloka-translation
    ```

2.  Move `loader/10-devaloka-translation-loader.php` into
    `<ABSPATH>wp-content/mu-plugins/`.

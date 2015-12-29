<?php
/*
Plugin Name: Devaloka Translation
Description: Provides an implementation of Symfony TranslationInterface for WordPress
Version: 0.2.2
Author: Whizark
Author URI: http://whizark.com
License: GPL-2.0+
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: devaloka-translation
Domain Path: /languages
Network: true
*/

if (!defined('ABSPATH')) {
    exit;
}

use Devaloka\Translation\Provider\TranslationProvider;

/** @var Devaloka\Devaloka $devaloka */
call_user_func(
    function () use ($devaloka) {
        $container = $devaloka->getContainer();

        /** @var Composer\Autoload\ClassLoader $loader */
        $loader = $container->get('loader');

        $loader->addPsr4('Devaloka\\Translation\\', __DIR__ . '/src/', true);

        $devaloka->register(new TranslationProvider());
    }
);

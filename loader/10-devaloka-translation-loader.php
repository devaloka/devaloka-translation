<?php
/*
Plugin Name: Devaloka Translation
Description: Provides an implementation of Symfony TranslationInterface for WordPress
Version: 0.1.0
Author: Whizark
Author URI: http://whizark.com
License: GPL-2.0+
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: devaloka-translation
Domain Path: /devaloka-translation/languages
Network: true
*/

if (!defined('ABSPATH')) {
    exit;
}

require WPMU_PLUGIN_DIR . '/devaloka-translation/devaloka-translation.php';

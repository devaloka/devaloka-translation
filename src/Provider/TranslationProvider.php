<?php
/**
 * Translation Provider
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 */

namespace Devaloka\Translation\Provider;

use Pimple\Container;
use Devaloka\Devaloka;
use Devaloka\DependencyInjection\ContainerInterface;
use Devaloka\Provider\ServiceProviderInterface;

/**
 * Class TranslationProvider
 *
 * @package Devaloka\EventDispatcher\Provider
 */
class TranslationProvider implements ServiceProviderInterface
{
    public function register(Devaloka $devaloka, ContainerInterface $container)
    {
        $container->add('translator.class', 'Devaloka\\Translation\\WordPressTranslator');
        $container->add(
            'translator',
            function (Container $container) {
                return new $container['translator.class'];
            }
        );
    }
}

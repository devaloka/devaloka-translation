<?php
/**
 * Translatable Interface
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 */

namespace Devaloka\Translation;

/**
 * Interface TranslatableInterface
 *
 * @package Devaloka\Translation
 *
 * @codeCoverageIgnore
 */
interface TranslatableInterface extends TranslatorAwareInterface
{
    public function getLocale();

    public function getTextDomain();

    public function loadTextDomain($domain = null, $path = null);

    public function loadLocaleFile($locale = null, $path = null);

    public function trans($text, $domain = null, $context = null);

    public function transNumber($single, $plural, $number, $domain = null, $context = null);
}

<?php
/**
 * Translatable Trait
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 */

namespace Devaloka\Translation;

/**
 * Trait TranslatableTrait
 *
 * @package Devaloka\Translation
 *
 * @codeCoverageIgnore
 */
trait TranslatableTrait
{
    use TranslatorAwareTrait;

    public function trans($text, $context = null, $domain = null)
    {
        $domain     = ($domain !== null) ? $domain : $this->getTextDomain();
        $parameters = [
            'context' => $context,
        ];

        return $this->translator->trans($text, $parameters, $domain, null);
    }

    public function transNumber($single, $plural, $number, $context = null, $domain = null)
    {
        $domain     = ($domain !== null) ? $domain : $this->getTextDomain();
        $parameters = [
            'single'  => $single,
            'plural'  => $plural,
            'context' => $context,
        ];

        return $this->translator->transChoice($single, $number, $parameters, $domain, null);
    }
}

<?php
/**
 * Translator Aware Trait
 *
 * @author Whizark <devaloka@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 */

namespace Devaloka\Translation;

use Symfony\Component\Translation\TranslatorInterface;

/**
 * Trait TranslatorAwareTrait
 *
 * @package Devaloka\Translation
 *
 * @codeCoverageIgnore
 */
trait TranslatorAwareTrait
{
    protected $translator;

    public function setTranslator(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
}

<?php

namespace Core\Template\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class StringExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('maiusculo', [$this, 'maiusculo']),
            new TwigFunction('minusculo', [$this, 'minusculo']),
        ];
    }

    public function maiusculo($string)
    {
        return strtoupper($string);
    }

    public function minusculo($string)
    {
        return strtolower($string);
    }
}
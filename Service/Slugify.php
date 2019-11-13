<?php

namespace Darkanakin41\CoreBundle\Service;

use Darkanakin41\CoreBundle\Tools\Slugify as ProcessClass;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Slugify extends AbstractExtension
{

    public function getFunctions()
    {
        return array(
            new TwigFunction('slugify', array($this, 'slugify')),
        );
    }

    public function getName()
    {
        return 'SlugifyService';
    }

    public function slugify($text)
    {
        return ProcessClass::process($text);
    }

}

<?php

namespace lampeBergerVersand\Containers;

use Plenty\Plugin\Templates\Twig;

class lampeBergerVersandContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('lampeBergerVersand::Stylesheet');
    }
}
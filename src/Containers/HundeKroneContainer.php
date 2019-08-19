<?php

namespace HundeKrone\Containers;

use Plenty\Plugin\Templates\Twig;

class HundeKroneContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('HundeKrone::Stylesheet');
    }
}
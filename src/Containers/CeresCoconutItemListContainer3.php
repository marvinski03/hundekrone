<?php

namespace HundeKrone\Containers;

use Plenty\Plugin\Templates\Twig;

class HundeKroneItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('HundeKrone::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}
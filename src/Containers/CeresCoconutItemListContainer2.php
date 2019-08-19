<?php

namespace HundeKrone\Containers;

use Plenty\Plugin\Templates\Twig;

class HundeKroneItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('HundeKrone::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}
<?php

namespace HundeKrone\Containers;

use Plenty\Plugin\Templates\Twig;

class HundeKroneItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('HundeKrone::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}
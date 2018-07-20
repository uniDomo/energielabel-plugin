<?php

namespace Energielabel\Providers;

use Plenty\Plugin\Templates\Twig;

class ContentProvider
{
    public function call(Twig $twig)
    {
        return $twig->render('Energielabel::EnergielabelContent');
    }
}
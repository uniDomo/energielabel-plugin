<?php

namespace Energielabel\Providers;

use Plenty\Plugin\Templates\Twig;

class EnergielabelDataProvider
{
    public function call ( Twig $twig )
    {
        return $twig->render('Energielabel::Energielabel');
    }
}
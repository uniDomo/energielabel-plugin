<?php

namespace Energielabel\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class EnergielabelController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('Energielabel::Index');
    }
}
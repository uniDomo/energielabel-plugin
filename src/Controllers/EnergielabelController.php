<<<<<<< HEAD
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
        return $twig->render('Energielabel::Energielabel');
    }
=======
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
>>>>>>> abe9a0e2ef12b5a83cc477f9aa09f11cc73431f8
}
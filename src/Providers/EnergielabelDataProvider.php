<<<<<<< HEAD
﻿<?php

namespace Energielabel\Providers;

use Plenty\Plugin\Templates\Twig;

class EnergielabelDataProvider
{
    public function call ( Twig $twig )
    {
        return $twig->render('Energielabel:Energielabel');
    }
=======
﻿<?php

namespace Energielabel\Providers;

use Plenty\Plugin\Templates\Twig;

class EnergielabelDataProvider
{
    public function call ( Twig $twig )
    {
        return $twig->render('Energielabel:Energielabel');
    }
>>>>>>> abe9a0e2ef12b5a83cc477f9aa09f11cc73431f8
}
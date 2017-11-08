<?php

namespace AcmeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

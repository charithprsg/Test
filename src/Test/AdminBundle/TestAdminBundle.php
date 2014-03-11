<?php

namespace Test\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TestAdminBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

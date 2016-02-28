<?php

namespace Security\FacebookBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FacebookBundle extends Bundle
{
    public function getParent() {
        return 'HWIOAuthBundle';
    }

}

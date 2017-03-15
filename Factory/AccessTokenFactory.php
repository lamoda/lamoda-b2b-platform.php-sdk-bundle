<?php

namespace LamodaB2B\Bundle\LamodaB2BBundle\Factory;

use LamodaB2B\Bundle\LamodaB2BBundle\Entity\AccessToken;
use LamodaB2B\Factory\AccessTokenFactoryInterface;

class AccessTokenFactory implements AccessTokenFactoryInterface
{
    /**
     * @return AccessToken
     */
    public function createAccessToken()
    {
        return new AccessToken();
    }
}

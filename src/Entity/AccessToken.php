<?php

namespace LamodaB2B\Bundle\LamodaB2BBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LamodaB2B\Entity\AccessToken as ParentAccessToken;

/**
 * @ORM\Entity(repositoryClass="LamodaB2B\Entity\AccessTokenRepository")
 * @ORM\HasLifecycleCallbacks
 */
class AccessToken extends ParentAccessToken
{

}

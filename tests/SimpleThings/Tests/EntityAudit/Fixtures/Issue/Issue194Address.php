<?php

namespace SimpleThings\EntityAudit\Tests\Fixtures\Issue;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Issue194Address
{
    /** @ORM\Id @ORM\OneToOne(targetEntity="Issue194User") */
    private $user;

    public function __construct(Issue194User $user)
    {
        $this->user = $user;
    }

    /**
     * @return Issue194User
     */
    public function getUser()
    {
        return $this->user;
    }
}
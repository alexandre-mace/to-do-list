<?php

namespace AppBundle\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserTest extends TestCase
{
    public function testEntity()
    {
        $user = new User();
        $user->setName('test');
        $this->assertEquals('test', $user->getName());
        $this->assertNull($user->getId());
    }
}

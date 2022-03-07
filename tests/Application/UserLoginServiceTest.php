<?php

declare(strict_types=1);

namespace UserLoginService\Tests\Application;

use PHPUnit\Framework\TestCase;
use UserLoginService\Application\UserLoginService;
use UserLoginService\Domain\User;

final class UserLoginServiceTest extends TestCase
{
    /**
     * @test
     */
    public function userIsLoggedIn()
    {
        $user = new User("Manolo");
        $userLoginService = new UserLoginService();

        $userLoginService->manualLogin($user);
        $this->assertContains($user, $userLoginService->getLoggedUsers());
    }
}

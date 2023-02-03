<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    private const USER_MANAGER_ID = 1;
    private const USER_EMITTER_ID = 2;
    private const GUARD_NAME = 'api';

    public function testUserHasRoleManager()
    {
        /** @var User $user */
        $user = app(User::class)->find(self::USER_MANAGER_ID);
        $this->assertTrue($user->hasRole('manager', self::GUARD_NAME));
    }

    public function testUserManagerHasPermissionToEditArticles()
    {
        /** @var User $user */
        $user = app(User::class)->find(self::USER_MANAGER_ID);
        $this->assertTrue($user->hasPermissionTo('edit articles'));
    }

    public function testUserManagerCanPublishArticles()
    {
        /** @var User $user */
        $user = app(User::class)->find(self::USER_MANAGER_ID);
        $this->assertTrue($user->can('publish articles'));
    }

    public function testUserEmitterHasPermissionToUnpublishArticles()
    {
        /** @var User $user */
        $user = app(User::class)->find(self::USER_EMITTER_ID);
        $this->assertTrue($user->hasPermissionTo('unpublish articles'));
    }

    public function testUserHasRoleEmitter()
    {
        /** @var User $user */
        $user = app(User::class)->find(self::USER_EMITTER_ID);
        $this->assertTrue($user->hasRole('emitter', self::GUARD_NAME));
    }

    public function testUserEmitterCanUnpublishArticles()
    {
        /** @var User $user */
        $user = app(User::class)->find(self::USER_EMITTER_ID);
        $this->assertTrue($user->can('unpublish articles'));
    }

    public function testUserEmitterCannotDeleteArticles()
    {
        /** @var User $user */
        $user = app(User::class)->find(self::USER_EMITTER_ID);
        $this->assertTrue($user->cannot('delete articles'));
    }
}

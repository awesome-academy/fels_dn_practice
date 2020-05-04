<?php

namespace Tests\Unit;

use App\User;
use Tests\ModelTestCase;
use App\Models\Lessions;
use App\Models\Activities;
use App\Models\Followers;


class UserTest extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new User(), [
            'name', 'email', 'password',
        ], [
            'password', 'remember_token',
        ]);
    }

    public function test_has_Many_Lessions_relation()
    {
        $m = new User();
        $r = $m->Lessions();
        $this->assertHasManyRelation($r, $m, new Lessions());
    }

    public function test_has_Many_activities_relation()
    {
        $m = new User();
        $r = $m->Activities();
        $this->assertHasManyRelation($r, $m, new Activities());
    }

    public function test_has_Many_Followers()
    {
        $m = new User();
        $r = $m->Followers();
        $this->assertHasManyRelation($r, $m, new Followers());
    }

    //Test Delete User
    public function testDeleteUser()
    {
        factory(User::class)->create();
        $user = User::first();
        if($user)
        $user->delete();
        $this->assertTrue(true);
    }

    //Test Update User
    public function testUpdateUser()
    {
        factory(User::class)->create();

        $data['name'] = 'Steve Smith';

        $user = User::first();
        $user->update($data);

        $this->assertInstanceOf(User::class, $user);

        $this->assertEquals($data['name'], $user->name);

        $this->assertTrue(true);
    }
}
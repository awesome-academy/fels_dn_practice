<?php

namespace Tests\Unit\Model;

use App\Models\Activities;
use App\User;
use Tests\TestCase;
use Tests\ModelTestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivitiesTest extends ModelTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_model_Activities()
    {
        $this->runConfigurationAssertions(new Activities(), [
            'user_id', 'action', 'content',
        ]);
        
    }

    public function test_belongsTo_User()
    {
        $m = new Activities();
        $r = $m->User();
        $this->assertBelongsToRelation($r, $m, new user(), 'user_id');
    }
}

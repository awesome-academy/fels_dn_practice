<?php

namespace Tests\Unit\Model;

use App\Models\Followers;
use App\User;
use Tests\TestCase;
use Tests\ModelTestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowersTest extends ModelTestCase
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

   public function test_model_followers()
   {
   		$this->runConfigurationAssertions(new Followers(), [
   			'follower_id',
   		]);
   }
   public function test_belongs_to_followers_relation()
   {
   		$m = new Followers();
        $r = $m->User();
        $this->assertBelongsToRelation($r, $m, new User(), 'user_id'); 
   }
}

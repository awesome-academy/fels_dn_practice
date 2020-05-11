<?php

namespace Tests\Unit\Model;

use App\Models\Category;
use App\Models\Words;
use App\User;
use App\Models\lessions;
use Illuminate\Support\Facades\Schema;
use Tests\ModelTestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Repositories\CategoryRepository;

class CategoryTest extends ModelTestCase
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

    public function test_model_Category()
    {
        $this->runConfigurationAssertions(new Category(), [
            'title', 'desc',
        ]);      
    }

    public function test_model_HasOne_words_Category()
    {
        $m = new Category();
        $r = $m->Words();
        $this->assertHasOneRelation($r, $m, new Words(), 'word_id');
    }
}

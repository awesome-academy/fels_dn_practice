<?php

namespace Tests\Unit\Models;

use App\Models\Category;
use App\Models\Words;
use App\Models\Choices;
use App\Models\Answers;
use Tests\ModelTestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestWord extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Words(), [
            'category_id',
            'content',
            'name',
        ]);
    }

    public function test_words_belongsto_category()
    {
        $m = new Words();
        $r = $m->category();
        $this->assertBelongsToRelation($r, $m, new Category(), 'category_id');
    }

    public function test_words_hasone_answer()
    {
        $m = new Words();
        $r = $m->answers();
        $this->assertHasOneRelation($r, $m, new Answers(), 'answer_id');
    }

    public function test_words_hasone_choice()
    {
        $m = new Words();
        $r = $m->choices();
        $this->assertHasOneRelation($r, $m, new Choices(), 'choice_id');
    }
}

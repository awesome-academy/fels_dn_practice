<?php

namespace Tests\Unit\Models;

use App\Models\Words;
use App\Models\Answers;
use App\Models\Choices;
use Tests\ModelTestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestChoice extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Choices(), [
            'word_id',
            'content',
            'correct',
        ]);
    }

    public function test_choice_hasone_answer()
    {
        $m = new Choices();
        $r = $m->answers();
        $this->assertHasOneRelation($r, $m, new Answers(), 'answer_id');
    }

    public function test_choices_belongsto_word()
    {
        $m = new Choices();
        $r = $m->words();
        $this->assertBelongsToRelation($r, $m, new Words(), 'word_id');
    }
}

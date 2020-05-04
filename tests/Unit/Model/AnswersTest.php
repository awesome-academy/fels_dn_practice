<?php

namespace Tests\Unit\Model;

use App\Models\Answers;
use App\Models\Words;
use App\Models\Lessions;
use App\Models\Choices;
use Tests\ModelTestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class AnswersTest extends ModelTestCase
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

    public function  test_table_answers()
    {
    	$m = new Answers();
    	$this->assertEquals([
    		'choice_id', 
    		'word',
    		'lession_id'
    	], $m->getFillable());
    }

    public function test_Answers_belongs_words_relation()
    {
        $m = new Answers();
        $r = $m->words();
        $this->assertBelongsToRelation($r, $m, new words(), 'words_id');
    }

    public function test_Answers_belongs_lessions_relation()
    {
    	$m = new Answers();
    	$r = $m->Lessions();
    	$this->assertBelongsToRelation($r, $m, new Lessions(), 'lessions_id');
    }

    public function test_Answers_belongs_choice_relation()
    {
    	$m = new Answers();
    	$r = $m->Choices();
    	$this->assertBelongsToRelation($r, $m, new Choices(), 'choices_id');
    }

}

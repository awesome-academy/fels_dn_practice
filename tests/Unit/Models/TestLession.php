<?php

namespace Tests\Unit\Models;

use App\User;
use App\Models\Category;
use App\Models\Lessions;
use App\Models\Answers;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tests\ModelTestCase;

class TestLession extends ModelTestCase
{
    public function test_model_configuration()
    {
        $this->runConfigurationAssertions(new Lessions(), [
            'category_id',
            'user_id',
            'result',
            'name',
        ]);
    }

    public function test_lessions_belongsto_user()
    {
        $m = new Lessions();
        $r = $m->user();
        $this->assertBelongsToRelation($r, $m, new User(), 'user_id');
    }

    public function test_lessions_belongsto_category()
    {
        $m = new Lessions();
        $r = $m->categories();
        $this->assertBelongsToRelation($r, $m, new Category(), 'category_id');
    }

    public function test_lessions_hasone_answer()
    {
        $m = new Lessions();
        $r = $m->answers();
        $this->assertHasOneRelation($r, $m, new Answers(), 'answer_id');
    }
}

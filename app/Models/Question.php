<?php

namespace App\Models;

use App\Models\Answer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;

    protected $fillable = ['header', 'subject_id', 'explanation'];
    protected $with = ['answers'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}

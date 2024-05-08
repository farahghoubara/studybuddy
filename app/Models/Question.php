<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use SoftDeletes;

    protected $fillable = ['header', 'subject_id', 'explanation'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}

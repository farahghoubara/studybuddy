<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{

    protected $with = ['questions'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

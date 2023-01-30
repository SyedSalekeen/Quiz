<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function catgeory()
    {
        return $this->belongsTo(Category::class, 'CatID');
    }


    public function options()
    {
        return $this->hasMany(QuestionAnswer::class, 'QuestionID');
    }


}

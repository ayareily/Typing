<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drill extends Model
{
    protected $fillable = [
        'title',
        'category_name',
        'problem0',
        'problem1',
        'problem2',
        'problem3',
        'problem4',
        'problem5',
        'problem6',
        'problem7',
        'problem8',
        'problem9'
    ];

    public function rules()
    {
        return [
        'title' => 'required|string|max:255',
        'category_name' => 'required|string|max:255',
        'problem0' => 'required|string|max:255',
        'problem1' => 'string|max:255',
        'problem2' => 'string|max:255',
        'problem3' => 'string|max:255',
        'problem4' => 'string|max:255',
        'problem5' => 'string|max:255',
        'problem6' => 'string|max:255',
        'problem7' => 'string|max:255',
        'problem8' => 'string|max:255',
        'problem9' => 'string|max:255',
        ];
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

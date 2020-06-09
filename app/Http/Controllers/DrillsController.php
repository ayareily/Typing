<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrillsController extends Controller
{
    public function new()
    {
        return view('drills.new');
    }

    public function create(Request $request)
    {
        $request->validate([
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
        ]);

        $drill = new Drill;

        $drill->fill($request->all())->save();

        return redirect('/drills/new')->with('flash_message', __('Registered.'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drill;

class DrillsController extends Controller
{
    public function index(){
        $drills = Drill::all();
        return view('drills.index', ['drills' => $drills]);
    }
    public function new()
    {
        return view('drills.new');
    }

    public function edit($id){
        // GETパラメータが数字かどうかをチェックする
        // 事前にチェックしておくことでDBへの無駄なアクセスが減らせる（WEBサーバーへのアクセスのみで済む）
        if(!ctype_digit($id)){
            return redirect('/drills/new')->with('flash_message', __('Invalid operation was performed.'));
        }
        
        $drill = Drill::find($id);
        return view('drills.edit', ['drill' => $drill]);
    }

    public function update(Request $request, $id)
    {
        // GETパラメータが数字かどうかをチェックする
        if(!ctype_digit($id)){
            return redirect('/drills/new')->with('flash_message', __('Invalid operation was performed.'));
        }

        $drill = Drill::find($id);
        $drill->fill($request->all())->save();

        return redirect('/drills')->with('flash_message', __('Registered.'));
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

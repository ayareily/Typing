<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        
        //$drill = Drill::find($id);
        $drill = Auth::user()->drills()->find($id);
        return view('drills.edit', ['drill' => $drill]);
    }

    public function update(Request $request, $id)
    {
        // GETパラメータが数字かどうかをチェックする
        if(!ctype_digit($id)){
            return redirect('/drills/new')->with('flash_message', __('Invalid operation was performed.'));
        }

        //$drill = Drill::find($id);
        $drill = Auth::user()->drills()->find($id);
        $drill->fill($request->all())->save();

        return redirect('/drills')->with('flash_message', __('Registered.'));
    }

    public function create(Request $request)
    {
        $drill = new Drill;
        $drill->fill($request->all());
        $drill->user_id = $request->user()->id;
        $drill->save();
        return redirect('/drills/new');
    }

    public function destroy($id)
    {
        // GETパラメータが数字かどうかをチェックする
        if(!ctype_digit($id)){
            return redirect('/drills/new')->with('flash_message', __('Invalid operation was performed.'));
        }
        
        // こう書いた方がスマート
        //Drill::find($id)->delete();
        $drill = Auth::user()->drills()->find($id)->delete();
        return redirect('/drills')->with('flash_message', __('Deleted.'));
    }

    public function show($id)
    {
        if(!ctype_digit($id)){
            return redirect('/drills/new')->with('flash_message', __('Invalid operation was performed.'));
        }

        //$drill = Drill::find($id);
        $drill = Auth::user()->drills()->find($id);

        return view('drills.show', ['drill' => $drill]);
    }

    public function mypage()
    {
        $drills = Auth::user()->drills()->get();
        return view('drills.mypage', compact('drills'));
    }
}

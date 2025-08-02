<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Test; 

class TestController extends Controller
{
    public function store(Request $request){

        $test=new Test;

        $request->validate([
            'test' => 'required|min:5|max:100',
        ]);

        $test->name=$request->test;
        $test->save();
        //return redirect()->back();

        $data=Test::all();
        //dd($data);
        return view('tests')->with('tests', $data);
       //dd($request->all());
    }
}

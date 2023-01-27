<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;


class questionController extends Controller
{
    //
    public function test($id){
        $data=question::where('course_id',$id)->inRandomOrder()->take(3)->get();
        session(['data'=> $data]);
        return view('client.exam_confirmation',['data'=>$data]);
    }
    public function takeExam(Request $request){
        $data=$request->session()->get('data');
        return view('client.takeTest',['data'=>$data]); 
    }
    public function test2(Request $request){
        $data=$request->session()->get('data','[1,2]');
        return view('test',['data'=>$data]);
    }
}

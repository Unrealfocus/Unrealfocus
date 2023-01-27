<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class courses extends Controller
{
    //get controller
    public function getcourses(){
        $courses=course::paginate(2);
        $cos=array();
        for ($i=0; $i <4 ; $i++) { 
            # code...
                 $cos[]=$i;
        }
        return view('admin.courseManagement',['courses'=>$courses,'cos'=>$cos]);
    }
}

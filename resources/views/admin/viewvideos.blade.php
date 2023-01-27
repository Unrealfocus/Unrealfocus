@extends('admin.components.layout')

@section('content')

<div class="pb-5 flex justify-between">
  <div><h1 class="pb-5 text-3xl text-purple-500 font-bold">Videos</h1></div>
  <div  class="bg-blue-500 text-white w-48 rounded-xl p-2">
    <i class="fa fa-plus" aria-hidden="true"></i><span class="pl-2">add video
  </span></div>
</div>

<div class="grid grid-cols-3 gap-8 pb-5">
  <div  class=" h-16 rounded-xl bg-purple-400  p-5">
      <div>
    <span class=" text-xl pl-4 font-bold">physics
      </span>
  </div>
  </div>
  <div  class=" h-16 rounded-xl bg-purple-400  p-5">
    <div> <span class="text-xl pl-4 font-bold">100</span>
  <span class="pl-3">Videos
    </span>
</div>
</div>
  </div>
<div class="mt-3 p-3  rounded-xl w-full h-full ">
  <div id="view-video">
    <iframe height="300px" src="SpiderMan.mp4"width="100%" name="iframe_a"></iframe>
    <div id="video-list-container">
        <h1>VIDEO LIST</h1>
    <div class="video-content h-full bg-purple-100 p-5">
    <div class="flex justify-between">
     <div><h3 class="font-bold pb-3"><span>1.</span> thermodynamic</h3></div>
      <div><p><a href="S1E1 Pilot.mp4" target="iframe_a" style="text-decoration:none; color:green; margin-left:3px;"><i class="fa fa-play-circle"></i>play</a>
      <a href="view_exam_question.php" style="text-decoration:none; color:blue; margin-left:3px;"><i class="fa fa-edit"></i>Edit</a> <a href="remove-course.php" style="text-decoration:none;color:red;"><i class="fa fa-remove"></i>Remove</a></p>
    </div>
  </div>
  
    <div class="mt-3 flex justify-between">
      <div>
        <h3 class="font-bold pb-1"><span>1.</span> thermodynamic</h3>
      </div>
      <div>
        <p><a href="S1E1 Pilot.mp4" target="iframe_a" style="text-decoration:none; color:green; margin-left:3px;"><i class="fa fa-play-circle"></i>play</a>
          <a href="view_exam_question.php" style="text-decoration:none; color:blue; margin-left:3px;"><i class="fa fa-edit"></i>Edit</a> <a href="remove-course.php" style="text-decoration:none;color:red;"><i class="fa fa-remove"></i>Remove</a></p>  
      </div>
      </div>
  </div>
    </div>
    </div>
  </div>
  @endsection
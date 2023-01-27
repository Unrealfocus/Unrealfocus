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
  <span class="pl-3">Questions
    </span>
</div>
</div>
  </div>
<div class="mt-3 p-3  rounded-xl w-full h-full bg-purple-200 ">
  <div class="border-y-white">
  <h3 class="font-bold">Question:1</h3>
  <p>whta is a noun</p>
  <h3 class="font-bold">options</h3>
  <p><span><strong>A:</strong>a noun is a name of a person</span>
  <span><strong>B:</strong>a noun is a name of a person</span>
  <span><strong>C:</strong>a noun is a name of a person</span>
  <span><strong>D:</strong>a noun is a name of a person</span></p>
  <p><strong>Answer:A</strong></p>
  <p><a href="view_exam_question.php" style="text-decoration:none; color:green;"><i class="fa fa-edit"></i>Edit</a> <a href="remove-course.php" style="text-decoration:none;color:red;"><i class="fa fa-remove"></i>Remove</a></p>
  <br>
  </div>

  <div class=" border-y-white">
    <h3 class="font-bold">Question:1</h3>
    <p>whta is a noun</p>
    <h3 class="font-bold">options</h3>
    <p><span><strong>A:</strong>a noun is a name of a person</span>
    <span><strong>B:</strong>a noun is a name of a person</span>
    <span><strong>C:</strong>a noun is a name of a person</span>
    <span><strong>D:</strong>a noun is a name of a person</span></p>
    <p><strong>Answer:A</strong></p>
    <p><a href="view_exam_question.php" style="text-decoration:none; color:green;"><i class="fa fa-edit"></i>Edit</a> <a href="remove-course.php" style="text-decoration:none;color:red;"><i class="fa fa-remove"></i>Remove</a></p>
   <br> 
  </div>
  </div>
  @endsection
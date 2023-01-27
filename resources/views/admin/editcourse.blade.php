@extends('admin.components.layout')

@section('content')

<div class="h-full">
<div id="editCourse" class="pt-5">
    <form  id="edc" action="edit_course.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname"class="text-purple-500 font-bold">NAME</label>
      </div>
      <div class="col-75">
        <input type="text" class="edc" name="course_name">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname" class="text-purple-500 font-bold">TITLE</label>
      </div>
      <div class="col-75">
        <input type="text" class="edc" name="course_title" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country" class="text-purple-500 font-bold">CATEGORY</label>
      </div>
      <div class="col-75">
        <select class="edc h-14" name="category">
          <option value="100level">100level</option>
          <option value="200level">200level</option>
          <option value="300level">300level</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject" class="text-purple-500 font-bold">DESCRIPTION</label>
      </div>
      <div class="col-75">
        <textarea class="edc" name="course_category" style="height:150px" ></textarea>
      </div>
    </div>
   
    <div class="flex justify-center pt-5" >
      <input type="submit" class=" p-7 text-white bg-purple-500 w-4/5 rounded-xl" id="eds"value="Save Course">
    </div>
    </form> 
</div>
</div>
@endsection
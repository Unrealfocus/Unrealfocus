@extends('admin.components.layout')

@section('content')
<div>
    <div class="flex justify-between">
        <div class="pb-5 text-3xl font-bold text-purple-500">
            Add question
        </div>
        <div class="bg-blue-500 p-3 text-center text-white rounded-xl">
            Back 
        </div>
    </div>
   
    <div class="w-4/5 my-14 m-auto">
<form class="text-purple-700">
    <div class="col-25">
        <label for="subject">QUESTION</label>
      </div>
      <div class="col-75">
        <textarea class="edc" name="course_category" ></textarea>
      </div>
      <div class="col-25">
        <label for="subject">Explanation</label>
      </div>
      <div class="col-75">
        <textarea class="edc" name="course_category" ></textarea>
      </div>
        <div class="flex justify-between">
            <div>
                <label for="email"><b>option A</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
            </div>
            <div>
                <label for="psw"><b>option B</b></label>
                <input type="text" placeholder="Enter Password" name="psw" required>
            </div>
            <div>
                <label for="psw"><b>option B</b></label>
                <input type="text" placeholder="Enter Password" name="psw" required>
            </div>
            <div>
                <label for="psw"><b>option B</b></label>
                <input type="text" placeholder="Enter Password" name="psw" required>
            </div>
        </div>
      <div class="flex justify-center">
        <label>A:<input type="radio" name="enable" id="enable"></label>
        <label>B:<input type="radio" name="enable" id="enable"></label>
        <label>C:<input type="radio" name="enable" id="enable"></label>
        <label>D:<input type="radio" name="enable" id="enable"></label>
      </div>
      <div class="flex justify-center m-10 p-2" > 
      <button type="submit" class="bg-purple-500 text-white rounded-xl w-48 p-2">Add Question</button>
    </div>
  </form>
</div>
</div>  

@endsection
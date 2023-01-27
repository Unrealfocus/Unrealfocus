@extends('admin.components.layout')

@section('content')
<div>
    <div class="flex justify-between">
        <div class="pb-5 text-3xl font-bold text-purple-500">
            add video
        </div>
        <div class="bg-blue-500 p-3 text-center text-white rounded-xl">
            back
        </div>
    </div>
   
    <div class="w-4/5 my-14 m-auto">
<form class="text-purple-700">
        <div class="flex justify-between">
            <div>
                <label for="email"><b>video name</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
            </div>
            <div>
                <label for="psw"><b>video directory</b></label>
                <input type="text" placeholder="Enter Password" name="psw" required>
            </div>
        </div>
      <div class="flex justify-center mt-5">
        <div>
            <label for="country" class="text-purple-500 font-bold">Course</label>
          </div>
          <div>
            <select class=" edc h-14 w-56" name="category">
              <option value="100level">phy113</option>
              <option value="200level">phy123</option>
              <option value="300level">phy126</option>
            </select>
          </div>
      </div>
      <div class="flex justify-center m-10 p-2" > 
      <button type="submit" class="bg-purple-500 text-white rounded-xl w-48 p-2">save change</button>
    </div>
  </form>
</div>
</div>  

@endsection
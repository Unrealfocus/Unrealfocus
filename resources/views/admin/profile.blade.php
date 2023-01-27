@extends('admin.components.layout')

@section('content')
<div>
    <div class="flex justify-between">
        <div class="pb-5 text-3xl font-bold text-purple-500">
            Profile
        </div>
        <div class="bg-blue-500 p-3 text-center text-white rounded-xl">
            change password
        </div>
    </div>
   
    <div class="w-4/5 my-14 m-auto">
<form class="text-purple-700">
        <div class="flex justify-between">
            <div>
                <label for="email"><b>Name</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
            </div>
            <div>
                <label for="psw"><b>Email</b></label>
                <input type="text" placeholder="Enter Password" name="psw" required>
            </div>
        </div>
      <div class="flex justify-center">
          <div>
            <label for="psw"><b>Number</b></label>
            <input type="text" placeholder="Enter Password" name="psw" required>
          </div>
      </div>
      <div class="flex justify-center m-10 p-2" > 
      <button type="submit" class="bg-purple-500 text-white rounded-xl w-48 p-2">save change</button>
    </div>
  </form>
</div>
</div>  

@endsection
@extends('admin.components.layout')

@section('content')
<div>
    <div class="flex justify-between">
        <div class="pb-5 text-3xl font-bold text-purple-500">
            change password
        </div>
    </div>
   
    <div class="w-4/5 my-14 m-auto">
<form class="text-purple-700">
        <div class="flex justify-between">
            <div>
                <label for="email"><b>old password</b></label>
                <input type="password" placeholder="Enter Email" name="email" required>
            </div>
            <div>
                <label for="psw"><b>new password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
            </div>
        </div>
      <div class="flex justify-center">
          <div>
            <label for="psw"><b>confirm password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
          </div>
      </div>
      <div class="flex justify-center m-10 p-2" > 
      <button type="submit" class="bg-purple-500 text-white rounded-xl w-48 p-2">save change</button>
    </div>
  </form>
</div>
</div>  

@endsection
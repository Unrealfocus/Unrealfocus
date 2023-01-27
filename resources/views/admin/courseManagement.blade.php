@extends('admin.components.layout')

@section('content')

<div class="pb-5 flex justify-between">
  <div><h1 class="pb-5 text-3xl text-purple-500 font-bold">course management</h1></div>
  <div  class="bg-blue-500 text-white w-48 rounded-xl p-2">
    <i class="fa fa-plus" aria-hidden="true"></i><span class="pl-2">add course
  </span></div>
</div>

<div class="grid grid-cols-3 gap-8 pb-5">
  <div class=" h-16 rounded-xl bg-purple-300 p-5"  >
    <span class="text-xl pl-4 font-bold">100</span>
    <span class="pl-3">courses
  </span>
  </div>
  <div  class=" h-16 rounded-xl bg-purple-300 p-5">
   <div><span class="text-xl pl-4 font-bold">100</span>
    <span class="pl-3">courses
  </span>
</div>
  </div>
  <div  class=" h-16 rounded-xl bg-purple-400  p-5">
      <div> <span class="text-xl pl-4 font-bold">100</span>
    <span class="pl-3">courses
      </span>
  </div>
  </div>
  </div>
<div class="mt-3 p-3  rounded-xl w-full h-full">
    <table class="w-full border-separate text-purple-500 border-spacing-5 border-white">
      <tr>
        <th class="border-y border-y-2 border-white justify text-left">#</th>
        <th class="border-y border-y-2 border-white justify text-left">Name</th>
        <th class="border-y border-y-2 border-white text-left">Category</th>
        <th class="border-y border-y-2 border-white text-left">videos</th>
        <th class="border-y border-y-2 border-white text-left">Past question</th>
        <th class="border-y border-y-2 border-white text-left">created</th>
        <th class="border-y border-y-2 border-white text-left">last updated</th>
        <th class="border-y border-y-2 border-white text-left"></th>
        <th class="border-y border-y-2 border-white text-left"></th>
      </tr>
      @php
        $i=0;
      @endphp
    
      @foreach ($courses as $item)
      <tr class="border-y border-y-2 border-white">
        <td>{{ ++$i }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->category }}</td>
        <td ><span>50</span> <span class="text-green-500 pl-5"><i class="fa fa-play" aria-hidden="true"></i></span></td>
        <td ><span>50</span> <span class="text-green-500 pl-5"><i class="fa fa-eye" aria-hidden="true"></i></span></td>
        <td>2018-07-21</td>
        <td>2018-07-21</td>
        <td><i class="fa fa-edit text-green-500"></i> <i class="fa fa-trash text-red-500" aria-hidden="true"></i></td>
      </tr>
      @endforeach
      
      
    </table>
  </div>
  @endsection
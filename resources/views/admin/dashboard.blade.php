     @extends('admin.components.layout')

        @section('content')
        <h2 class="text-3xl p-2 font-bold">Dashboard</h2>
        <div class="w-full h-1/4 bg-purple-800 mt-5 rounded-xl p-12">
            <p class="text-xl text-red-200">
                welcome kefas
            </p>
            <p class="text-gray-200">
                 make sure to improve each day
            </p>
        </div>

        <div class="mt-5">
            <p class="font-bold">
                overview
            </p>
            <div class="grid grid-cols-3 gap-8">
            <div class=" h-24 rounded-xl bg-blue-300"  >
              <i class="fas fa-book-open"></i>
            </div>
            <div  class=" h-24 rounded-xl bg-indigo-300 p-5">
             <div class="pl-28"> <p class="text-xl pl-4 font-bold">100</p>
               <i class="fas fa-book-reader text-xl"></i><span class="pl-3">courses
            </span>
        </div>
            </div>
            <div  class=" h-24 rounded-xl bg-violet-400  p-5">
                <div class="pl-28"> <p class="text-xl pl-4 font-bold">100</p>
                <i class="fas fa-graduation-cap"></i><span class="pl-3">courses
                </span>
            </div>
            </div>
            </div>
        </div>
        
        <div class="mt-4">
            <p>comment</p>
            <div class="container">
                <img src="{{ asset('image/image.png') }}" alt="Avatar" style="width:90px">
                <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                <p>John Doe saved us from a web disaster.</p>
              </div>
              
              <div class="container">
                <img src="{{ asset('image/image.png') }}" alt="Avatar" style="width:90px">
                <p><span>Rebecca Flex.</span> CEO at Company.</p>
                <p>No one is better than John Doe.</p>
              </div>
        </div>
     @endsection
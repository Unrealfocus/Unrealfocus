<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  
   <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.2.0-web/css/all.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="sidenav" class="bg-white">
        <div class="img mb-5" >
        <img src="{{ asset('image/logo.jpg') }}" class="h-20" >
        </div>
        <a href="#about">Dashboard</a>
        <a href="#clients">Courses</a>
        <a href="#contact">Comment</a>
        <a href="#contact">Profile</a>
        <a href="#contact">Log out</a>
      </div>
      
      <div class="main p-5" >
           @yield('content')
      </div>
</body>
</html>
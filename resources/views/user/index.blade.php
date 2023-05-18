<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Document</title>
</head>
<body>

</body>
</html>
@include('user.navbar')

  <!--Hero-->
  <div class="pt-24">
    @if (session('status'))
<div class="alert alert-success w-52  " role="alert">
    {{ session('status') }}
</div>
@endif

    <div class="container px-3 space-x-0 mt-16 mx-auto flex flex-col md:space-x-52   md:flex-row items-center justify-center ">

      <!--Left Col-->
      <div class="flex flex-col space-y-0 w-full md:w-2/5 justify-center items-start text-left md:space-y-5  ">

        <p class="uppercase tracking-loose w-full  text-left ">Welcome</p>
        <h1 class="my-4 text-5xl font-bold leading-tight">
          Lorem ipsum dolor sit amet consectetur
        </h1>
        <p class="leading-normal text-2xl mb-8">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, dolores.
        </p>
      </div>
      <!--Right Col-->
      <div class="w-full md:w-3/5  text-center">
        <img class="w-full md:w-4/5 z-50" src="img/sign.svg" />
      </div>
    </div>
  </div>

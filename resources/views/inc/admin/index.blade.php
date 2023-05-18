@include('inc.includes.header')
<div>
@include('inc.admin.navbar')
@include('inc.admin.sidebar')
<div class="pt-24 px-24 sm:ml-64 sm:px-1 sm:pt-10 md:px-10 ">
    @yield('content')
   </div>
</div>
@include('inc.includes.footer')

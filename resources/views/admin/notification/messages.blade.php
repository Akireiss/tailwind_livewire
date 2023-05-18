@if(session('message'))
<div class="bg-orange-100 border-1-4 border-orange-500 text-orange p-4" role="alert">
    <div class="font-bold">
        Success
    </div>
    <p>{{session('message')}}</p>
</div>
@endif

@include('pages.header')
@include('pages.banner')
@include('pages.modale')

<div class="container-fluid ">
    <div class='row'>
        <div class='col-md-3'>
    @include('pages.sidebar')
</div>
<div class="col-md-7"   >

@yield('content')

</div>


<div class="col-md-2">
    coloana dreapta template.blade.php
</div>
</div>
</div>
</body>
@include('pages.footer')
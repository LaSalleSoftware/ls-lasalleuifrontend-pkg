<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:font-family="http://www.w3.org/1999/xhtml">

@include('head.main')

<body class="bg-gray-200 font-sans leading-normal tracking-normal gradient"  style="font-family: 'Poiret One', sans-serif;">

<div class="container
        @include('header.main')
    </div>

    <!--Container-->
    <div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">

<div class="mx-0 sm:mx-6">





    <div class="container">
        @yield('content')
    </div>



</div>

</div>
@include('footer.main')

</body>

</html>

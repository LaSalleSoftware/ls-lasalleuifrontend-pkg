<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:font-family="http://www.w3.org/1999/xhtml" class="bg-white antialiased">

@include('lasallesoftwarelasalleui::base.head.main')

<body class="text-black" style="font-family: 'Poiret One', sans-serif;">

@include('lasallesoftwarelasalleui::base.header.main')

<main>
    @yield('content')
</main>

@include('lasallesoftwarelasalleui::base.footer.main')

</body>

</html>

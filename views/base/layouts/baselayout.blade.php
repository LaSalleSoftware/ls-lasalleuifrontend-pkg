<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:font-family="http://www.w3.org/1999/xhtml" class="bg-white antialiased">

@include('lasallesoftwarelasalleuifrontend::base.head.main')

<body class="text-black" style="font-family: 'Poiret One', sans-serif;">

@include('lasallesoftwarelasalleuifrontend::base.header.main')

<main>
    @yield('content')
</main>

@include('lasallesoftwarelasalleuifrontend::base.footer.main')

</body>

</html>

<head>
    @include('lasallesoftwarelasalleuifrontend::base.head.charset')
    @include('lasallesoftwarelasalleuifrontend::base.head.icons')
    @include('lasallesoftwarelasalleuifrontend::base.head.web-app-manifest')
    @include('lasallesoftwarelasalleuifrontend::base.head.safari-pinned-tab')
    @include('lasallesoftwarelasalleuifrontend::base.head.theme-colour')
    @include('lasallesoftwarelasalleuifrontend::base.head.social-media-meta-tags')
    @include('lasallesoftwarelasalleuifrontend::base.head.title')
    @include('lasallesoftwarelasalleuifrontend::base.head.meta-tags')

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poiret One:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- For the responsive menu -->
    <style>
        #menu-toggle:checked + #menu {
            display: block;
        }
    </style>

</head>

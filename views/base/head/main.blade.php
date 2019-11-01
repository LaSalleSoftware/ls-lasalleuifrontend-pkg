<head>
    @include('lasallesoftwarelasalleui::base.head.charset')
    @include('lasallesoftwarelasalleui::base.head.icons')
    @include('lasallesoftwarelasalleui::base.head.web-app-manifest')
    @include('lasallesoftwarelasalleui::base.head.safari-pinned-tab')
    @include('lasallesoftwarelasalleui::base.head.theme-colour')
    @include('lasallesoftwarelasalleui::base.head.social-media-meta-tags')



    @include('lasallesoftwarelasalleui::base.head.title')

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

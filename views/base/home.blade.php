<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:font-family="http://www.w3.org/1999/xhtml" class="bg-white antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#00b4b6">
    <meta name="theme-color" content="#ffffff">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@tailwindcss">
    <meta name="twitter:title" content="Tailwind CSS - A utility-first CSS framework for rapidly building custom designs">
    <meta name="twitter:description" content="Documentation for the Tailwind CSS framework.">
    <meta name="twitter:image" content="https://tailwindcss.com/img/twitter-large-card.png">
    <meta name="twitter:creator" content="@tailwindcss">
    <meta property="og:url" content="https://tailwindcss.com/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Tailwind CSS - A utility-first CSS framework for rapidly building custom designs" />
    <meta property="og:description" content="Documentation for the Tailwind CSS framework." />
    <meta property="og:image" content="https://tailwindcss.com/img/twitter-large-card.png" />

    <title>Use ayield here -- TITLE!</title>

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

<body class="text-black" style="font-family: 'Poiret One', sans-serif;">

<header class="lg:px-16 px-4 lg:py-0 py-3 bg-purple-500 flex flex-wrap items-center justify-between">

    <div class=" flex justify-between items-center">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <img class="fill-current h-16 w-16 mr-2" src="visage-logo_150x150.png" width="54" height="54" viewBox="0 0 54 54" />
            <span class="font-bold text-4xl tracking-tight">LaSalle Software</span>
        </div>
    </div>

    <label for="menu-toggle" class="pointer-cursor lg:hidden block">
        <svg class="fill-current text-white hover:text-purple-300 focus:text-purple-300" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            <title>Menu</title>
        </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
        <nav>
            <ul class="lg:flex items-center justify-between text-white text-xl pt-4 lg:pt-0 font-semibold">
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300" href="#">Features</a></li>
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300" href="#">Pricing</a></li>
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300" href="#">Documentation</a></li>
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300 " href="#">Support</a></li>
            </ul>
        </nav>
    </div>

</header>

<main>

    <!--

    Image
    title
    author
    date
    category:
    tags:

    content

    updates (in chron order):
    title
    author
    date

    content


    <link to all blog posts>


    -->

    <div>
        <article>
            <section class="font-bold text-xl p-12">
                <!-- image -->
                <div class="w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
                     style="background-image:url('https://source.unsplash.com/collection/1118905/');
                     height: 75vh;">
                </div>

                <!-- title -->
                <h1 class="lg:text-center font-bold break-normal text-3xl md:text-5xl">Welcome to Ghostwind CSS</h1>

                <!-- author -->
                <div class="lg:text-center text-gray-600">by Bob Bloom</div>

                <!-- date -->
                <div class="lg:text-center text-gray-600">October 3, 2019</div>

                <!-- category -->
                <h3 class="lg:text-center text-gray-600">category: main</h3>

                <!-- tags -->
                <h3 class="lg:text-center text-gray-600">tags: templates, sports, shout</h3>

                <!-- content -->
                <div class="">
                    <h1>You make me wanna shout.</h1>
                    <p>You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers</p>

                    <p>You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers. </p>
<br>
                    <p>You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers You make me wanna shout. Isley Brothers</p>

                </div>


            </section>
            <section></section>
            <section></section>
            <aside></aside>
        </article>
    </div>

</main>

<footer class="bg-purple-500 p-6">

    <div class="flex items-center lg:justify-between flex-wrap-6 text-white">
        <div></div>

        <nav>
            <ul class="lg:flex items-center justify-between text-xl pt-4 lg:pt-0 font-semibold">
                <li class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300">
                    <a href="https://twitter.com/bobbloom">
                        <svg class="fill-current w-5 h-5"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <title>Twitter</title>
                            <path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"/>
                        </svg>
                    </a>
                </li>
                <li class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300">
                    <a href="https://github.com/lasallesoftware">
                        <svg
                            class="fill-current w-5 h-5"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>GitHub</title>
                            <path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"/>
                        </svg>
                    </a>
                </li>
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300" href="#">Documentation</a></li>
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:text-purple-300 " href="#">Support</a></li>
            </ul>
        </nav>

        <div></div>
    </div>

    <div class="flex items-center lg:justify-between flex-wrap-6 text-white">
        <div></div>

        <div>Copyright © 2017-2019 The South LaSalle Trading Corporation.</div>

        <div></div>
    </div>

</footer>
</body>

</html>


@extends('lasallesoftwarelasalleui::base.layouts.baselayout')

@section('content')

    {{-- START: Page Title, if it exists --}}
        @isset($pageTitle)
        <div class="container m-auto p-8 text-grey-darkest font-bold">
            <div class="flex flex-wrap -mx-2 mb-2">

                <div class="w-full">
                    <div class="h-10 text-lg flex items-center justify-center">
                        <h1 class="text-3xl font-bold">{{ $pageTitle }}</h1>
                    </div>
                </div>

            </div>
        </div>
    @endisset
    {{-- END: Page Title, if it exists --}}


    {{-- START: Display all the posts --}}
    @php
    $i = 1
    @endphp

    @foreach ($posts as $post)

        @if ($i == 1)
        <div class="container mx-auto p-8">
            <div class="flex flex-row flex-wrap -mx-2">
        @endif

                <div class="w-full sm:w-1/2 md:w-1/3 mb-4 px-2">
                    <div class="relative font-bold bg-white rounded border">

                        <picture class="block items-center border-b">
                            @if (($post['featured_image_type'] == "external_file") || ($post['featured_image_type'] == "upload"))
                               <img class="block w-auto" src="{{ $post['featured_image'] }}" alt="{{ $post['title'] }}" >
                            @endif
                            @if ($post['featured_image_type'] == "code")
                                    {{ $post['featured_image'] }}
                            @endif
                        </picture>

                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">
                                <a class="stretched-link link-custom1" href="/{{ $post['slug'] }}" title="{{ $post['title'] }}">
                                    {{ $post['title'] }}
                                </a>
                            </h3>
                            <time class="block mb-2 text-gray-600" datetime="{{ $post['datetime'] }}">{{ $post['publish_on'] }}</time>
                            <div  class="block mb-2 text-gray-600">by {{ $post['author'] }}</div>
                            <p>
                                {{ $post['excerpt'] }}...
                            </p>
                        </div>

                    </div>
                </div>

        @if ($i == 6)
            </div>
        </div>
        @endif

        @php
            $i++
        @endphp

        @if ($loop->iteration == 6)
        @php
            $i = 1
        @endphp
        @endif

    @endforeach
    {{-- END: Display all the posts --}}


    {{-- START: previous (aka "new blog posts") and next (aka "older blog posts") links --}}
    <div class="container m-auto pb-8 pl-8 pr-8 text-grey-darkest font-bold">
        <div class="flex flex-wrap -mx-2 mb-8 border rounded">

            @isset($prev_page_url)
                <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2">
                    <div class="h-10 text-lg flex items-center justify-center md:justify-end lg:justify-end xl:justify-end">
                            <a
                                href="{{ $prev_page_url }}"
                                rel="prev"
                                class="link-custom1"
                            >
                                &lsaquo;&lsaquo; newer
                                @if (isset($pageTitle))
                                    {{ strtolower($pageTitle) }}
                                @else
                                    blog posts
                                @endif
                            </a>
                    </div>
                </div>
            @endisset

            @isset($next_page_url)
                <div class="w-full md:w-1/2 lg:w-1/2 xl:w-1/2 md:px-6 lg:px-6 xl:px-6">
                    <div class="h-10 text-lg flex items-center justify-center md:justify-start lg:justify-start xl:justify-start">
                           <a
                                href="{{ $next_page_url }}"
                                rel="prev"
                                class="link-custom1"
                            >
                                older
                                @if (isset($pageTitle))
                                {{ strtolower($pageTitle) }}
                                @else
                                    blog posts
                                @endif
                                &rsaquo;&rsaquo;
                            </a>
                    </div>
                </div>
            @endisset

        </div>
    </div>
    {{-- END: previous (aka "new blog posts") and next (aka "older blog posts") links --}}

@endsection


@if (!empty($socialMediaMetaTags['twitter_card']))
    <!-- https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/markup -->
    <meta name="twitter:card" content="{!! $socialMediaMetaTags['twitter_card'] !!}">
    <meta name="twitter:site" content="{!! $socialMediaMetaTags['site'] !!}">
    <meta name="twitter:title" content="{!! $socialMediaMetaTags['title'] !!}">
    <meta name="twitter:description" content="{!! $socialMediaMetaTags['description'] !!}">
    <meta name="twitter:image" content="{!! $socialMediaMetaTags['image'] !!}">
    <meta name="twitter:creator" content="{!! $socialMediaMetaTags['creator'] !!}">

    <meta property="og:url" content="{!! $socialMediaMetaTags['url'] !!}" />
    <meta property="og:type" content="{!! $socialMediaMetaTags['og_type'] !!}" />
    <meta property="og:title" content="{!! $socialMediaMetaTags['title'] !!}" />
    <meta property="og:description" content="{!! $socialMediaMetaTags['description'] !!}" />
    <meta property="og:image" content="{!! $socialMediaMetaTags['image'] !!}" />
@endif

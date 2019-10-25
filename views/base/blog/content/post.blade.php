<div class="pb-6">
    <article>
        <section class="font-bold text-xl pt-12 pl-12 pr-12">

            <!-- featured image -->
            @include('lasallesoftwarelasalleui::base.blog.content.featured_image')


            <!-- title -->
            <h1 class="lg:text-center font-bold break-normal text-3xl md:text-5xl">{{ $title }}</h1>

            <!-- date -->
            <div class="lg:text-center text-gray-600">{{ $publish_on }}</div>

            <!-- author -->
            <div class="lg:text-center text-gray-600">by {{ $author }}</div>

            <!-- category -->
            <h3 class="lg:text-center text-gray-600">category: {!! $category !!}</h3>

            @include('lasallesoftwarelasalleui::base.blog.content.tags')

            <!-- content -->
            <div class="m-6">
                {!! $content !!}
            </div>

        </section>

        @include('lasallesoftwarelasalleui::base.blog.content.postupdates')

        <section></section>
        <section></section>
        <aside></aside>
    </article>
</div>

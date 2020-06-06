<div class="pb-6">
    <article>
        <section class="font-bold text-xl pt-12 pl-12 pr-12">

            <!-- featured image -->
            @include('lasallesoftwarelasalleuifrontend::base.blog.content.featured_image')


            <!-- title -->
            <h1 class="lg:text-center font-bold break-normal text-3xl md:text-5xl">{!! $title !!}</h1>

            <!-- date -->
            <div class="lg:text-center text-gray-700">
                <time datetime="{{ $datetime }}">{{ $publish_on }}</time>
            </div>

            <!-- author -->
            <div class="lg:text-center text-gray-700">by {!! $author !!}</div>

            <!-- category -->
            <h3 class="lg:text-center text-gray-700">category: {!! $category !!}
            </h3>

            @include('lasallesoftwarelasalleuifrontend::base.blog.content.tags')

            <!-- content -->
            <div class="m-6">
                {!! $content !!}
            </div>

        </section>

        @include('lasallesoftwarelasalleuifrontend::base.blog.content.postupdates')

        <section></section>
        <section></section>
        <aside></aside>
    </article>
</div>

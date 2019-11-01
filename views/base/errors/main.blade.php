@extends('lasallesoftwarelasalleui::base.layouts.baselayout')

@section('content')
    <div>
        <article>
            <section class="font-bold text-xl p-12">

                <!-- featured image -->
                @include('lasallesoftwarelasalleui::base.blog.content.featured_image')

                <!-- title -->
                <h1 class="lg:text-center font-bold break-normal text-3xl md:text-5xl">There was an error!</h1>

                <!-- content -->
                <div class="mt-6">
                    We got this status code: <span class="font-bold text-2xl text-purple-500">&ldquo;{!! $status_code !!}&rdquo;</span>
                    <br /><br />
                    This is the error reported: <span class="font-bold text-2xl text-purple-500">&ldquo;{!! $error !!}&rdquo;</span>
                    <br /><br />
                    This is the reason given: <span class="font-bold text-2xl text-purple-500">&ldquo;{!! $reason !!}&rdquo;</span>
                </div>

            </section>
        </article>
    </div>
@endsection

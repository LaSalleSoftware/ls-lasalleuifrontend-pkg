@extends('lasallesoftwarelasalleui::base.layouts.baselayout')

@section('content')
    <div>
        <article>
            <section class="font-bold text-xl p-12">

                <!-- image -->
                <div class="w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
                     style="background-image:url('buffalo-bills.jpg');
                     height: 75vh;">
                </div>

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

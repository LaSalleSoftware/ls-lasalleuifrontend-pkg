@if ($numberOfPostupdates > 0)
    <section class="font-bold text-xl pt-12 pl-12 pr-12">

        @foreach ($postupdates as $postupdate)
            <!-- title -->
            <h2 class="font-bold break-normal text-2xl md:text-3xl border-solid border-t-2 border-gray-400  mr-18">Update: {{ $postupdate['title'] }}</h2>

            <!-- date -->
                <div class="text-gray-600">{{ $postupdate['publish_on'] }}</div>

            <!-- content -->
            <div class="m-6">
                {!! $postupdate['content'] !!}
            </div>

        @endforeach

    </section>
@endif

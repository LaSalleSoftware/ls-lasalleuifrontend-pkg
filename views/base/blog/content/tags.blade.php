@if ($numberOfTags > 0)

    <!-- tags -->
    <h3 class="lg:text-center text-gray-700">

        @if ($numberOfTags == 1)
            tag:&nbsp;
        @else
            tags:&nbsp;
        @endif


        @foreach ($tags as $tag)
                @if ($loop->index != $loop->count-1)
                    {!! $tag['link'] !!},&nbsp;
                @else
                    {!! $tag['link'] !!}
                @endif
        @endforeach

    </h3>

@endif

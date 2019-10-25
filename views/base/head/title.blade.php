    <title>
        @isset($title)
            {!! substr($title, 0, 25) !!} -
        @endisset
        {!!  env('APP_NAME') !!}
    </title>

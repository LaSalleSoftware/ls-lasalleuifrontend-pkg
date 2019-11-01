<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">
    <id>{{ $meta['id'] }}</id>
    <link href="{{ $meta['link'] }}"></link>
    <title><![CDATA[{{ $meta['title'] }}]]></title>
    <updated>2019-10-29T21:10:45+00:00</updated>
@foreach($posts as $post)
    <entry>
        <title><![CDATA[{{ $post['title'] }}]]></title>
        <link rel="alternate" href="{{ url($post['link']) }}" />
        <id>{{ url($post['id']) }}</id>
        <author>
            <name> <![CDATA[{{ $post['author'] }}]]></name>
        </author>
        <summary type="html">
            <![CDATA[{!! $post['summary'] !!}]]>
        </summary>
        <updated>{{ $post['updated'] }}</updated>
    </entry>
    @endforeach
</feed>

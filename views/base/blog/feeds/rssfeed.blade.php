<?=
/* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[{{ $meta['title'] }}]]></title>
        <link><![CDATA[{{ url($meta['link']) }}]]></link>
        <description><![CDATA[{{ $meta['description'] }}]]></description>
        <language>{{ $meta['language'] }}</language>
        <pubDate>{{ $meta['pubDate'] }}</pubDate>

        @foreach ($posts as $post)
            <item>
                <title><![CDATA[{{ $post['title'] }}]]></title>
                <link>{{ url($post['link']) }}</link>
                <description><![CDATA[{!! $post['description'] !!}]]></description>
                <author><![CDATA[{{ $post['author'] }}]]></author>
                <guid>{{ url($post['guid']) }}</guid>
                <pubDate>{{ $post['pubDate'] }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>

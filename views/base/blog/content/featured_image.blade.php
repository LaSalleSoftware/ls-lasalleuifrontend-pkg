@if (($featured_image_type == "external_file") || ($featured_image_type == "upload"))
    <picture class="bg-purple-500">
        <img
            src="{{ $featured_image }}"
            class="object-contain h-49 w-full"
            @isset($title)
            alt="{{ $title }}"
            @endisset
        >
    </picture>
@endif

@if ($featured_image_type == "code")
    <picture class="bg-purple-500">
        {{ $featured_image }}
    </picture>
@endif




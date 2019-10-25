
@if (($featured_image_type == "external_file") || ($featured_image_type == "upload"))
    <div class="bg-purple-500">
        <img
            src="{{ $featured_image }}"
            class="object-contain h-49 w-full"
        >
    </div>
@endif

@if ($featured_image_type == "code")
    <div class="bg-purple-500">
        {{ $featured_image }}
    </div>
@endif

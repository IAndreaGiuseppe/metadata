@if(config('metadata.resources.image.url') !== '' || isset($image_url))
<!-- Content image -->
<meta property="og:image" content="{{ !empty($image_url) ? $image_url : config('metadata.resources.image.url') }}" />

@if(config('metadata.resources.image.type') !== '' || isset($image_type))
<meta property="og:image:type" content="{{ !empty($image_type) ? $image_type : config('metadata.resources.image.type') }}" />
@endif

@if(config('metadata.resources.image.width') !== '' || isset($image_width))
<meta property="og:image:width" content="{{ !empty($image_width) ? $image_width : config('metadata.resources.image.width') }}" />
@endif

@if(config('metadata.resources.image.height') !== '' || isset($image_height))
<meta property="og:image:height" content="{{ !empty($image_height) ? $image_height : config('metadata.resources.image.height') }}" />
@endif

@if(config('metadata.resources.image.alt') !== '' || isset($image_alt))
<meta property="og:image:alt" content="{{ !empty($image_alt) ? $image_alt : config('metadata.resources.image.alt') }}" />
@endif

@endif

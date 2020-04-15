<meta name="robots" content="{{ !empty($robots) ? $robots : config('metadata.robots') }}" />
<meta name="referrer" content="{{ !empty($referrer) ? $referrer : config('metadata.referrer') }}" />

<meta property="og:title" content="{{ !empty($title) ? $title : config('metadata.title') }}" />
<meta name="description" content="{{ !empty($description) ? $description : config('metadata.description') }}" />

@if (!empty($canonical))
<link rel="canonical" href="{{ $canonical }}" />
@endif

@if (config('metadata.facebook.is_active') || !empty($facebook))
@include('metadata::facebook')
@endif

@if (config('metadata.twitter.is_active') || !empty($twitter))
@include('metadata::twitter')
@endif

@include('metadata::images')

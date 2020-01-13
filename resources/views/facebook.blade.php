<!-- Facebook OpenGraph -->
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:description" content="{{ !empty($description) ? $description : config('metadata.description') }}" />

<meta property="og:type" content="{{ !empty($type) ? $type : config('metadata.facebook.type') }}" />
<meta property="og:locale" content="{{ config('app.locale') }}" />

@if (config('metadata.facebook.app_id') !== '')
<meta property="fb:app_id" content="{{ config('metadata.facebook.app_id') }}" />
@endif

<!-- Twitter Card -->
<meta name="twitter:card" content="{{ !empty($card_type) ? $card_type : config('metadata.twitter.card_type') }}" />
<meta name="twitter:site" content="{{ !empty($site) ? $site : config('metadata.twitter.site') }}" />

@if(config('metadata.twitter.author') !== '' || isset($author))
<meta property="twitter:creator" content="{{ !empty($author) ? $author : config('metadata.twitter.author') }}" />
@endif

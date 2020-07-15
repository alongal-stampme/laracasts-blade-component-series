@props(['card', 'title', 'description' => false, 'image'])

<meta name="twitter:card" content="{{ $title }}" />
@if ($description)
    <meta name="twitter:site" content="{{ $description }}" />
@endif


<meta property="og:card" content="{{ $title }}" />
@if ($description)
    <meta property="og:site" content="{{ $description }}" />
@endif

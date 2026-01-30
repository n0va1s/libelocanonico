<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--PWA-->
<meta name="theme-color" content="#1b1b1b">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="Libelo">

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<link rel="manifest" href="{{ asset('manifest.webmanifest') }}">

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance

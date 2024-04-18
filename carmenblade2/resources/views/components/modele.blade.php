<!DOCTYPE html>
<html lang="fr-BE">

<head>
    <title>{{$title}}</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.css.fontawesome')
    @include('partials.css.bootstrap')
    @include('partials.css.bootstrap_icons')
    {{ $head ?? '' }}
</head>

<body>
    <div class="container">
        <header>
            @include('partials.menu')
            <img src="images/logo%20VOY%20asbl.png" class="img-fluid w-auto h-auto" alt="Une canne complète le Y du logo VOY et le O est un ballon muni d'un cache-yeux.">
        </header>
        <main id="content">
            {{ $slot }}
        </main>
        <footer class="text-start">
            <hr>
            © {{ date('Y') }} - VOY
            {{ $footer ?? '' }}
        </footer>
    </div>
    @include('partials.js.bootstrap')
    @include('partials.js.fontawesome')
    {{ $scripts ?? ''}}
</body>

</html>

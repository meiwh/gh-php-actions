<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body class="">
    <main class="container" style="margin-top: 10rem;">
        @foreach ($archives as $archive)
            <h4>{{ $archive->title }}</h4>
            <p>{{ $archive->content }}</p>
            <hr/>
        @endforeach
    </main>
</body>

</html>

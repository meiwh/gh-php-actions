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
        <form method="post" action="/archive/update">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input name="id" type="hidden" value="{{ $archive->id }}">
            <input name="title" value="{{ $archive->title }}">
            <input name="dynasty" value="{{ $archive->dynasty }}" placeholder="dynasty">
            <input name="author" value="{{ $archive->author }}" placeholder="author">
            <textarea name="content" placeholder="content">{{ $archive->content }}</textarea>
            <textarea name="appreciation" placeholder="appreciation">{{ $archive->appreciation }}</textarea>
            <button type="submit">提交</button>
        </form>
    @endforeach
</main>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</head>

<body class="">

    <main class="container" style="margin-top: 10rem;">

        @foreach ($archives as $archive)
            <p>这是用户 {{ $archive->title }}</p>
        @endforeach











    </main>



    <script>
        const toastTrigger = document.getElementById('gradeSelect')
        if (toastTrigger) {
            toastTrigger.addEventListener('change', (e) => {
                console.log(e)
            })
        }
    </script>

</body>

</html>
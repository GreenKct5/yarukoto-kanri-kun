<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Loading</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-green-100">
    <div class="fixed top-0 left-0 w-full h-full bg-white bg-opacity-80 flex justify-center items-center z-50" id="loading">
        <img src="../../img/loading.gif" alt="Loading" class="w-20 h-20">
    </div>

    <div id="content" class="hidden">
        @yield('content')
    </div>

    <script>
        setTimeout(function() {
            window.location.href = "{{ route('home') }}";
        }, 2000);
    </script>
</body>
</html>

<!--
使い方
@extends('loading')

@section('content')
    <h1>Welcome to My Laravel App</h1>
    <p>This is the content of the page.</p>
@endsection
-->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Loading</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        .loading-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .loading-gif {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="loading-container" id="loading">
        <img src="../../img/" alt="Loading" class="loading-gif">
    </div>

    <div id="content" style="display:none;">
        @yield('content')
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var loading = document.getElementById('loading');
            var content = document.getElementById('content');
            setTimeout(function() {
                loading.style.display = 'none';
                content.style.display = 'block';
            }, 3000);
        });
    </script>
</body>
</html>

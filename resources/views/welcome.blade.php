<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>やること管理くん</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">
</head>
<body class="antialiased flex justify-center items-center h-screen">
        <div class="flex flex-col items-center space-y-4">
            <button type="button" onclick="location.href='./signIn'" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded w-40">
                log in
            </button>
            <button type="button" onclick="location.href='./signUp'" class="bg-white hover:bg-gray-200 border-2 border-gray-500 text-gray-500 font-bold py-2 px-4 rounded w-40">
                sign up
            </button>
        </div>
    </div>
</body>
</html>

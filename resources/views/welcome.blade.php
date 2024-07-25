<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>やること管理くん</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        <h2 class="text-center text-3xl font-bold mb-6">やること管理くん</h2>
        <img class="mx-auto w-56" src="../../../img/yakankun.png">
            <div class="mx-4">
                <div class="flex items-center justify-between mb-6">
                    <button type="button" onclick="location.href='./signIn'" class="bg-green-500 hover:bg-green-600 text-white border-2 border-green-200 text-gray-500 font-bold w-full py-2 px-4 rounded">
                    log in
                    </button>
                </div>
                <div class="flex items-center justify-between mb-6">
                    <button type="button" onclick="location.href='./signUp'" class="bg-green-100 hover:bg-green-200 border-2 border-green-200 text-gray-700 font-bold w-full py-2 px-4 rounded">
                    sign up
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

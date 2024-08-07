<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>SignUp Page</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        <div class="flex items-center justify-between">
            <button type="button" onclick="location.href='./'" class="font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <img class="object-scale-down h-5 w-5" src="../../../img/arrow.svg">
            </button>
        </div>
        <h2 class="text-center text-3xl font-bold mb-6">やること管理くん</h2>
        <img class="mx-auto w-56" src="../../../img/yakankun.png">
            <form method="POST" action="{{ route('users.store') }}" class="mx-4">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">ユーザー名</label>
                    <input id="username" type="text" name="username" required autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">メールアドレス</label>
                    <input id="email" type="email" name="email" required autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">パスワード</label>
                    <input id="password" type="password" name="password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between">
                    <input type="submit" class="bg-green-100 hover:bg-green-300 border-2 border-green-200 text-gray-700 font-bold w-full py-2 px-4 rounded"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

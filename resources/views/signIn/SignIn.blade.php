<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn Page</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h2 class="text-center text-2xl font-bold mb-6">ログイン</h2>
            <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">サインイン</button>
                </div>
            <form method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">ユーザー名</label>
                    <input id="email" type="email" name="email" required autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
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
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">ログイン</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

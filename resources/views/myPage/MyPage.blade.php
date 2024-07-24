<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>マイページ</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">
</head>

<body class="bg-gray-100">
    <header class="fixed top-0 left-0 w-full bg-blue-100 shadow-md z-10">
        <div class="container mx-auto py-2 flex justify-between items-center">
            <button class="flex"><a href="../home/"><img class="ml-10" src="../../../img/back.svg"></a></button>
            <nav>
                <div class="flex">
                    <div class="text-xl flex items-center">マイページ</div>
                    <img class="object-scale-down h-16 w-16 mx-6" src="../../../img/yakan1.svg">
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="grid gap-y-8 mt-36 mx-24">
            <div class="flex items-center">
                <img class="w-20 mr-10" src="../../../img/icon.svg">
                <div class="grid gap-y-2">
                    <p class="text-2xl">名前</p>
                    <p class="text-2xl">パスワード</p>
                    <p class="text-1xl">メールアドレス</p>
                </div>
            </div>
            <div class="flex place-items-start">
                <img class="ml-1 w-8 mr-10" src="../../../img/tags.svg">
                <ol class=" text-2xl flex flex-wrap gap-4 underline underline-offset-2">
                    <li>#タグ1</li>
                    <li>#タグ2</li>
                    <li>#タグ3</li>
                </ol>
            </div>
            <a class="flex items-center" href="../logOut/">
                <img class="w-10 mr-8" src="../../../img/logout.svg">
                <div class="text-2xl text-rose-400">ログアウト</div>
            </a>
        </div>
    </main>
</body>

</html>
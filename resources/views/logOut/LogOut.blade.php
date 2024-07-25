<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>ログアウト</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">
</head>

<body class="bg-gray-100">
    <header class="fixed top-0 left-0 w-full bg-green-100 shadow-md z-10">
        <div class="container mx-auto py-2 flex justify-between items-center">
            <button class="flex"><a href="../myPage/"><img class="ml-10" src="../../../img/back.svg"></a></button>
            <nav>
                <div class="flex">
                    <div class="text-xl flex items-center">ログアウト</div>
                    <img class="object-scale-down h-16 w-16 mx-6" src="../../../img/yakan1.svg">
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="grid gap-y-8 mt-28 sm:mt-32 mx-8 sm:mx-12 md:mx-24">
            <p class="text-xl md:text-2xl">ログアウトしますか？</p>
            <button class="flex flex-row-reverse gap-2">
                <a class="flex items border border-rose-400 bg-rose-400 rounded-md px-6 py-3" href="../">
                    <div class="text-xl sm:text-2xl text-gray-50">ログアウト</div>
                </a>
                <a class="flex items border border-gray-400 rounded-md px-6 py-3" href="../myPage/">
                    <div class="text-xl sm:text-2xl text-gray-400">戻る</div>
                </a>
            </button>
        </div>
    </main>
</body>

</html>

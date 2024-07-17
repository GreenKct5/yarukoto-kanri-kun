<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>やること管理くん</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">
</head>
<body>
    <h1 class="ml-2">や管くん</h1>
    <button id="hamburger" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">=</button>

    @include('createTodo.CreateTodo')
    @yield('content')

    <script>
        const hamburger = document.getElementById('hamburger');
        const menu = document.getElementById('menu');

        hamburger.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
    <div class="h-auto w-64  rounded-md bg-green-800">
                <b class="ml-1">科目名</b>
                <div class="h-auto w-60 mx-auto rounded-md bg-green-200">
                            <div class="flex ml-1"><input type="checkbox"><img class="object-scale-down h-5 w-5" src="../../../img/task.svg"><p class="ml-1">課題内容</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/date.svg"><p class="ml-1">日付，時間</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/propose.svg"><p class="ml-1">提出先
                                <select name="提出先">
                                <option value="Webclass">Webclass</option>
                                <option value="Teams">Teams</option>
                                <option value="授業時">授業時</option>
                                </select>
                            </p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/tags.svg"><p class="ml-1">タグ</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/memo.svg"><p class="ml-1">メモ</p></div>
                        </div><br/>
                <div class="h-auto w-60 mx-auto rounded-md bg-green-200">
                <div class="flex ml-1"><input type="checkbox"><img class="object-scale-down h-5 w-5" src="../../../img/task.svg"><p class="ml-1">課題内容</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/date.svg"><p class="ml-1">日付，時間</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/propose.svg"><p class="ml-1">提出先
                                <select name="提出先">
                                <option value="Webclass">Webclass</option>
                                <option value="Teams">Teams</option>
                                <option value="授業時">授業時</option>
                                </select>
                            </p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/tags.svg"><p class="ml-1">タグ</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/memo.svg"><p class="ml-1">メモ</p></div>
                        </div><br/>
                </div><br/>
    <div class="h-auto w-64  rounded-md bg-green-600">
                <b>&nbsp科目名</b>
                <div class="h-auto w-60 mx-auto rounded-md bg-green-200">
                <div class="flex ml-1"><input type="checkbox"><img class="object-scale-down h-5 w-5" src="../../../img/task.svg"><p class="ml-1">課題内容</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/date.svg"><p class="ml-1">日付，時間</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/propose.svg"><p class="ml-1">提出先
                                <select name="提出先">
                                <option value="Webclass">Webclass</option>
                                <option value="Teams">Teams</option>
                                <option value="授業時">授業時</option>
                                </select>
                            </p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/tags.svg"><p class="ml-1">タグ</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/memo.svg"><p class="ml-1">メモ</p></div>
                        </div><br/>
</body>
</html>

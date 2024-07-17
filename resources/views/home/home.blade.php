<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>やること管理くん</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">
</head>
<body class="bg-gray-100">   
    <header class="fixed top-0 left-0 w-full bg-blue-100 shadow-md z-10">
        <div class="container mx-auto py-2 flex justify-between items-center">
        <div class="flex"><img class="ml-10" src="../../../img/icon.svg"></div>
            <nav>
                <div class="flex">
                    <div class="text-xl flex items-center">や管くん</div>
                    <img class="object-scale-down h-16 w-16 mx-6" src="../../../img/yakan1.svg">
                </div>
            </nav>
        </div>
    </header>
        <main><div class="h-auto max-w-8xl mx-auto rounded-md bg-green-600 mx-10 mt-24">
                    <b class="ml-1">科目名</b>
                    <div class="h-auto max-w-8xl mx-5 rounded-md bg-green-200">
                            <div class="flex ml-1"><input id="acd-check1" class="acd-check" type="checkbox"><img class="object-scale-down h-5 w-5" src="../../../img/task.svg">
                            <p class="ml-1">課題内容<input type="text" class="ml-3 mt-1 rounded-md" name="title" size="15"></input></p></div>
                            <div class="acd-content">
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/date.svg"><p class="ml-1">日付，時間</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/propose.svg"><p class="ml-1">提出先
                                <select name="提出先" class="rounded-md">
                                <option value="Webclass">Webclass</option>
                                <option value="Teams">Teams</option>
                                <option value="授業時">授業時</option>
                                </select>
                            </p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/tags.svg"><p class="ml-1">タグ</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/memo.svg"><p class="ml-1">メモ</p></div>
                        </div>
                    </div><br/>
                    <div class="h-auto max-w-8xl mx-5 rounded-md bg-green-200">
                    <div class="flex ml-1"><input id="acd-check1" class="acd-check" type="checkbox"><img class="object-scale-down h-5 w-5" src="../../../img/task.svg">
                            <p class="ml-1">課題内容<input type="text" class="ml-3 mt-1 rounded-md" name="title" size="15"></input></p></div>
                            <div class="acd-content">
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/date.svg"><p class="ml-1">日付，時間</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/propose.svg"><p class="ml-1">提出先
                                <select name="提出先" class="rounded-md">
                                <option value="Webclass">Webclass</option>
                                <option value="Teams">Teams</option>
                                <option value="授業時">授業時</option>
                                </select>
                            </p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/tags.svg"><p class="ml-1">タグ</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/memo.svg"><p class="ml-1">メモ</p></div>
                        </div>
                    </div><br/>
                </div>    
                    <main><div class="h-auto max-w-8xl mx-auto rounded-md bg-green-600 mx-10 my-5">
                    <b class="ml-1">科目名</b>
                    <div class="h-auto max-w-8xl mx-5 rounded-md bg-green-200">
                    <div class="flex ml-1"><input id="acd-check1" class="acd-check" type="checkbox"><img class="object-scale-down h-5 w-5" src="../../../img/task.svg">
                            <p class="ml-1">課題内容<input type="text" class="ml-3 mt-1 rounded-md" name="title" size="15"></input></p></div>
                            <div class="acd-content">
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/date.svg"><p class="ml-1">日付，時間</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/propose.svg"><p class="ml-1">提出先
                                <select name="提出先" class="rounded-md">
                                <option value="Webclass">Webclass</option>
                                <option value="Teams">Teams</option>
                                <option value="授業時">授業時</option>
                                </select>
                            </p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/tags.svg"><p class="ml-1">タグ</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/memo.svg"><p class="ml-1">メモ</p></div>
                        </div>
                    </div><br/>
                    <div class="h-auto max-w-8xl mx-5 rounded-md bg-green-200">
                    <div class="flex ml-1"><input id="acd-check1" class="acd-check" type="checkbox"><img class="object-scale-down h-5 w-5" src="../../../img/task.svg">
                            <p class="ml-1">課題内容<input type="text" class="ml-3 mt-1 rounded-md" name="title" size="15"></input></p></div>
                            <div class="acd-content">
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/date.svg"><p class="ml-1">日付，時間</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/propose.svg"><p class="ml-1">提出先
                                <select name="提出先" class="rounded-md">
                                <option value="Webclass">Webclass</option>
                                <option value="Teams">Teams</option>
                                <option value="授業時">授業時</option>
                                </select>
                            </p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/tags.svg"><p class="ml-1">タグ</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/memo.svg"><p class="ml-1">メモ</p></div>
                        </div>
                    </div><br/>
                    </div>
                    <div class="h-auto max-w-8xl mx-auto rounded-md bg-green-600 mx-10 my-5">
                    <b>&nbsp科目名</b>
                    <div class="h-auto max-w-8xl mx-5 rounded-md bg-green-200">
                    <div class="flex ml-1"><input id="acd-check1" class="acd-check" type="checkbox"><img class="object-scale-down h-5 w-5" src="../../../img/task.svg">
                            <p class="ml-1">課題内容<input type="text" class="ml-3 mt-1 rounded-md" name="title" size="15"></input></p></div>
                            <div class="acd-content">
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/date.svg"><p class="ml-1">日付，時間</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/propose.svg"><p class="ml-1">提出先
                                <select name="提出先" class="rounded-md">
                                <option value="Webclass">Webclass</option>
                                <option value="Teams">Teams</option>
                                <option value="授業時">授業時</option>
                                </select>
                            </p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/tags.svg"><p class="ml-1">タグ</p></div>
                            <div class="flex">　<img class="object-scale-down h-5 w-5" src="../../../img/memo.svg"><p class="ml-1">メモ</p></div>
                    </div>
                </div><br/>
                <div class="fixed z-99999 bottom-10 right-10 py-5 px-5 bg-green-800 rounded-full"><img src="../../../img/add_button.svg"></div> 
        </main>
    </div>
</body>
</html>

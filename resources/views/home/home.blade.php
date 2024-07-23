<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>やること管理くん</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2" defer></script>
</head>
<body class="bg-gray-100" x-data="{ showModal: false }">
    <header class="fixed top-0 left-0 w-full bg-blue-100 shadow-md z-10">
        <div class="container mx-auto py-2 flex justify-between items-center">
            <div class="flex"><img class="ml-10" src="../../../img/icon.svg"></div>
                <nav>
                    <div class="flex items-center justify-center">
                        <div @click="showModal = true" class="flex items-center mx-2">
                            <img class="object-scale-down" src="../../../img/book.svg" alt="Book">
                            <p class="ml-2">科目の追加</p>
                        </div>
                        <img class="object-scale-down h-16 w-16 mx-6" src="../../../img/yakan1.svg" alt="Yakan">
                    </div>
                </nav>
        </div>
    </header>
    <main>
        <div class="h-auto max-w-8xl mx-auto rounded-md bg-green-600 mx-10 mt-24">
            @foreach($todos as $subjectId => $subjectTodos)
                @php
                    // 教科名を取得、存在しない場合は 'Unknown' を使用
                    $subject = $subjects->get($subjectId);
                    $subjectName = $subject ? $subject->name : 'Unknown';
                @endphp
                <b class="ml-1">{{ $subjectName }}</b>
                @foreach($subjectTodos as $todo)
                    <div class="h-auto max-w-8xl mx-5 rounded-md bg-green-200 mb-5">
                        <div class="flex ml-1">
                            <input id="acd-check{{ $todo->id }}" class="acd-check" type="checkbox">
                            <img class="object-scale-down h-5 w-5" src="../../../img/task.svg">
                            <p class="ml-1">{{ $todo->title }}</p>
                        </div>
                        <div class="acd-content">
                            <div class="flex">
                                <img class="object-scale-down h-5 w-5" src="../../../img/date.svg">
                                <p class="ml-1">{{ $todo->deadline }}</p>
                            </div>
                            <div class="flex">
                                <img class="object-scale-down h-5 w-5" src="../../../img/propose.svg">
                                <p class="ml-1">{{ $todo->submit_place }}</p>
                            </div>
                            <div class="flex">
                                <img class="object-scale-down h-5 w-5" src="../../../img/tags.svg">
                                <p class="ml-1">{{ $todo->subject_id }}</p>
                            </div>
                            <div class="flex">
                                <img class="object-scale-down h-5 w-5" src="../../../img/memo.svg">
                                <p class="ml-1">{{ $todo->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
        <button onclick="location.href='./createTodo'" class="fixed z-99999 bottom-10 right-10 py-5 px-5 bg-green-800 rounded-full">
            <img src="../../../img/add_button.svg">
        </button>
    </main>
    <!-- モーダル -->
    <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50" x-show="showModal" x-transition>
        <div class="bg-white p-4 rounded" @click.away="showModal = false">
            <button @click="showModal = false">
                <img alt="閉じる" src="../../../img/add_button.svg" class="rotate-45 invert">
            </button>
            <div class="mt-4 text-center">
                <p class="text-xl font-semibold mb-4">授業科目を追加する</p>
                <form action="{{ route('home.store') }}" method="POST">
                    @csrf
                    <input class="form-input border border-gray-300 rounded p-2 w-full my-2" id="name" type="text" name="name" placeholder="教科名" value="{{ old('name') }}"/>
                    <input class="form-input border border-gray-300 rounded p-2 w-full my-2" id="group_id" type="text" name="group_id" placeholder="グループID" value="{{ old('group_id') }}"/>
                    <input class="bg-gray-500 text-white rounded p-2 w-full mt-4 hover:bg-gray-600 focus:outline-none" type="submit" value="追加"/>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

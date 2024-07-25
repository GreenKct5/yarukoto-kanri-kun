<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>マイページ</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-white" x-data="{ showModal: false }">
    <header class="fixed top-0 left-0 w-full bg-green-100 shadow-md z-10">
        <div class="container mx-auto py-2 flex justify-between items-center">
            <button class="flex" onclick="window.location.href='{{ route('loading.home') }}'">
                <img class="ml-10" src="../../../img/back.svg">
            </button>
            <nav>
                <div class="flex items-center">
                    <div class="text-xl flex items-center">マイページ</div>
                    <img class="object-scale-down h-16 w-16 mx-6" src="../../../img/yakan1.svg" alt="Yakan">
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="grid gap-y-8 mt-28 sm:mt-32 mx-8 sm:mx-12 md:mx-24 lg:mx-48">
            <div class="flex items-center">
                <img class="w-16 sm:w-18 md:w-20 mr-8 sm:mr-10" src="{{ $user->icon }}">
                <div class="grid gap-y-2">
                    <p class="text-xl sm:text-2xl">{{ $user->name }}</p>
                    <p class="text-xl sm:text-2xl">{{ $user->email }}</p>
                </div>
            </div>
            <div class="flex place-items-start">
                <img class="ml-1 w-6 sm:w-8 mr-6 sm:mr-8 md:mr-10" src="../../../img/tags.svg">
                <ol class="text-xl sm:text-2xl flex flex-wrap gap-4 underline underline-offset-2">
                    @foreach($usersGroups as $userGroup)
                        <li>
                            @if($userGroup->group)
                                <span>{{ $userGroup->group->name }}</span>
                            @else
                                <span>グループ情報がありません</span>
                            @endif
                        </li>
                    @endforeach
                </ol>
            </div>
            <a class="flex items-center" href="../logOut/">
                <img class="w-8 sm:w-10 mr-4 sm:mr-6 md:mr-8" src="../../../img/logout.svg">
                <div class="text-xl sm:text-2xl text-rose-400">ログアウト</div>
            </a>
            <button class="flex flex-row-reverse gap-2">
                <div class="flex items border border-green-400 bg-green-400 rounded-md px-6 py-3" @click="showModal = true">
                    <div class="text-xl sm:text-2xl text-gray-50">編集</div>
                </div>
                <div class="flex items border border-green-400 rounded-md px-6 py-3" onclick="window.location.href='{{ route('loading.home') }}'">
                    <div class="text-xl sm:text-2xl text-green-400">キャンセル</div>
                </div>
            </button>
        </div>
        <!-- <div class="fixed z-99999 bottom-10 right-10 md:right-24 lg:right-48 p-5 bg-green-400 rounded-full shadow-xl">
            <img src="../../../img/save.svg">
        </div> -->
    </main>
    <!-- モーダル -->
    <div x-show="showModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" @click.away="showModal = false">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg" @click.away="showModal = false">
        <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">編集</h2>
                <button @click="showModal = false" class="text-gray-500 hover:text-gray-700">
                    <span class="text-2xl">&times;</span>
                </button>
            </div>
            <form action="{{ route('mypage.update') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-ml font-semibold mb-2" for="name">名前</label>
                    <input id="name" type="text" name="name" value="{{ $user->name }}" required autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label class="block text-ml font-semibold mb-2" for="email">E-mail</label>
                    <input id="email" type="email" name="email" value="{{ $user->email }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label class="block text-ml font-semibold mb-2">グループ</label>
                    <ul>
                        @foreach($allGroups as $group)
                        <li class="mb-2">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" name="group_ids[]" value="{{ $group->id }}"
                                    @if($user->groups->contains($group->id)) checked @endif
                                    class="form-checkbox h-5 w-5 text-blue-500">
                                <span>{{ $group->name }}</span>
                            </label>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="py-2 px-4 bg-green-500 text-white rounded hover:bg-green-600">更新</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

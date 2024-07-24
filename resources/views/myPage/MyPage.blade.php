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

<body class="bg-gray-100" x-data="{ showModal: false }">
    <header class="fixed top-0 left-0 w-full bg-blue-100 shadow-md z-10">
        <div class="container mx-auto py-2 flex justify-between items-center">
            <div class="flex"><a href="../home/"><img class="ml-10" src="../../../img/back.svg" alt="Back"></a></div>
            <nav>
                <div class="flex items-center">
                    <div class="text-xl flex items-center">マイページ</div>
                    <img class="object-scale-down h-16 w-16 mx-6" src="../../../img/yakan1.svg" alt="Yakan">
                </div>
            </nav>
        </div>
    </header>
    <main class="py-24">
        <div class="container mx-auto px-4">
            <p>ユーザー名: {{ $user->name }}</p>
            <p>メールアドレス: {{ $user->email }}</p>
            <p>画像: {{ $user->icon }}</p>

            <section class="mb-8">
                <h2 class="text-xl font-semibold mb-2">あなたが所属しているグループ</h2>
                <ul>
                    @foreach($usersGroups as $userGroup)
                        <li class="mb-2">
                            @if($userGroup->group)
                                <span class="font-bold">{{ $userGroup->group->name }}</span>
                            @else
                                <span class="font-bold">グループ情報がありません</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </section>
            <button @click="showModal = true" class="mt-4 py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600">グループを編集</button>
        </div>
    </main>

    <!-- モーダル -->
    <div x-show="showModal" x-transition class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg" @click.away="showModal = false">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">すべてのグループ</h2>
                <button @click="showModal = false" class="text-gray-500 hover:text-gray-700">
                    <span class="text-2xl">&times;</span>
                </button>
            </div>
            <form action="{{ route('mypage.update') }}" method="POST">
                @csrf
                <ul class="mb-4">
                    @foreach($allGroups as $group)
                    <li class="mb-2">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" name="group_ids[]" value="{{ $group->id }}"
                                @if($user->groups->contains($group->id)) checked @endif
                                class="form-checkbox h-5 w-5 text-blue-500">
                            <span class="font-bold">{{ $group->name }}</span>
                        </label>
                    </li>
                    @endforeach
                </ul>
                <button type="submit" class="mt-4 py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600">グループを更新</button>
            </form>
        </div>
    </div>
</body>

</html>

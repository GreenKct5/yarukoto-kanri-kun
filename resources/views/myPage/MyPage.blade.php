<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>マイページ</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap">

<body class="bg-gray-100">
    <header class="fixed top-0 left-0 w-full bg-blue-100 shadow-md z-10">
        <div class="container mx-auto py-2 flex justify-between items-center">
            <div class="flex"><a href="../home/"><img class="ml-10" src="../../../img/back.svg"></a></div>
            <nav>
                <div class="flex">
                    <div class="text-xl flex items-center">マイページ</div>
                    <img class="object-scale-down h-16 w-16 mx-6" src="../../../img/yakan1.svg">
                </div>
            </nav>
        </div>
    </header>
    <main class="py-24">
    <p>ユーザー名: {{ $user->name }}</p>
    <p>メールアドレス: {{ $user->email }}</p>
    <p>画像: {{ $user->icon }}</p>
        <section>
                <h2 class="text-xl font-semibold mb-2">すべてのグループ</h2>
                <ul>
                    @foreach($allGroups as $group)
                        <li class="mb-2">
                            <span class="font-bold">{{ $group->name }}</span>
                        </li>
                    @endforeach
                </ul>
            </section>
            <section class="mb-8">
                <h2 class="text-xl font-semibold mb-2">あなたが所属しているグループ</h2>
                <ul>
                    @foreach($usersGroups as $userGroup)
                        <li class="mb-2">
                            <span class="font-bold">{{ $userGroup->group->name }}</span>
                        </li>
                    @endforeach
                </ul>
            </section>
    </main>
</body>

</html>

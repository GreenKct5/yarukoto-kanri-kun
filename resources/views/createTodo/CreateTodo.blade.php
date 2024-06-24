<!DOCTYPE html>
<html>
<head>
    <title>CreateTodo Page</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Welcome to the CreateTodo Page</h1>

        <form action="" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="" for="subject">
                    科目名
                </label>
                <input class="" id="subject" type="text" name="subject">
            </div>
            <div class="mb-4">
                <label class="" for="title">
                    課題名
                </label>
                <input class="" id="title" type="text" name="title">
            </div>
            <div class="mb-4">
                <label class="" for="deadline">
                    提出期限
                </label>
                <input class="" id="deadline" type="date" name="deadline">
                <input class="" id="deadline" type="time" name="deadline">
            </div>
            <div class="mb-4">
                <label class="" for="submission_place">
                    提出先
                </label>
                <input class="" id="submission_place" type="text" name="submission_place">
            </div>
            <div class="mb-4">
                <label class="" for="tags">
                    タグ
                </label>
                <input class="" id="tags" type="text" name="tags">
            </div>
            <div class="mb-4">
                <label class="" for="notes">
                    メモ
                </label>
                <textarea class="" id="notes" name="notes"></textarea>
            </div>
            <div class="">
                <button class="" type="submit">
                    保存
                </button>
            </div>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <title>CreateTodo Page</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Welcome to the CreateTodo Page</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                <strong class="font-bold">記入していない箇所があります</strong>
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="form-label" for="subject">
                    科目名
                </label>
                <input class="form-input" id="subject" type="text" name="subject" value="{{ old('subject') }}">
            </div>
            <div class="mb-4">
                <label class="form-label" for="title">
                    課題名
                </label>
                <input class="form-input" id="title" type="text" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-4">
                <label class="form-label" for="deadline">
                    提出期限
                </label>
                <input class="form-input" id="deadline" type="date" name="deadline" value="{{ old('deadline') }}">
                <input class="form-input mt-2" id="deadline_time" type="time" name="deadline_time" value="{{ old('deadline_time') }}">
            </div>
            <div class="mb-4">
                <label class="form-label" for="submission_place">
                    提出先
                </label>
                <input class="form-input" id="submission_place" type="text" name="submission_place" value="{{ old('submission_place') }}">
            </div>
            <div class="mb-4">
                <label class="form-label" for="tags">
                    タグ
                </label>
                <input class="form-input" id="tags" type="text" name="tags" value="{{ old('tags') }}">
            </div>
            <div class="mb-4">
                <label class="form-label" for="notes">
                    メモ
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="notes" name="notes">{{ old('notes') }}</textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    保存
                </button>
            </div>
        </form>
    </div>
</body>
</html>

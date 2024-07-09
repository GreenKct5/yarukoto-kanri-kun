<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <title>CreateTodo Page</title>
</head>
<body>
    <div class="container mx-auto p-4">

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
                <strong class="font-bold">記入していない箇所があります</strong>
            </div>
        @endif

        <p>課題を追加する</p>
        <form action="" method="POST">
            @csrf
            <div class="flex mb-4">
                <label class="form-label mr-1" for="subject">
                    <img class="h-16 w-16" src="../../../img/task.svg"/>
                </label>
                <input class="form-input border-gray-500 shadow-none mx-3" id="subject" type="text" name="subject" placeholder="課題内容" value="{{ old('subject') }}">
            </div>
            <div class="flex h-20 mb-4">
                <label class="form-label mr-1" for="deadline">
                    <img class="object-cover h-16 w-16" src="../../../img/date.svg"/>
                </label>
                <input class="w-32 mx-2 bg-gray-200 rounded-md px-4 py-2" id="deadline" type="date" name="deadline" value="{{ old('deadline') }}">
                <input class="w-32 bg-gray-200 rounded-md" id="deadline_time" type="time" name="deadline_time" value="{{ old('deadline_time') }}">
            </div>
            <div class="flex mb-4">
                <label class="form-label mr-1" for="submission_place">
                    <img class="h-16 w-16" src="../../../img/propose.svg"/>
                </label>
                <select name="提出先" class="ml-2">
                    <option value="">提出先</option>
                    <option value="Webclass">Webclass</option>
                    <option value="Teams">Teams</option>
                    <option value="授業時">授業時</option>
                </select>
            </div>
            <div class="flex mb-4">
                <label class="form-label mr-1" for="tags">
                    <img class="h-16 w-16" src="../../../img/tags.svg"/>
                </label>
                <a>tag</a>
            </div>
            <div class="flex mb-4">
                <label class="form-label mr-1" for="notes">
                    <img class="h-16 w-16" src="../../../img/memo.svg"/>
                </label>
                <textarea class="appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mx-3" id="notes" name="notes" placeholder="コメント">{{ old('notes') }}</textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-white hover:bg-gray-100 text-gray-400 border border-gray-400 border-1 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="">
                    キャンセル
                </button>
                <input class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" value="決定"/>
            </div>
        </form>
    </div>
</body>
</html>

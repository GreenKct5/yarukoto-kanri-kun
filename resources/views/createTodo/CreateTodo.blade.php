<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>CreateTodo Page</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen w-full">
    <div class="container" id="menu">
        @if ($errors->any() && ($errors->has('subject') || $errors->has('task') || $errors->has('deadline') || $errors->has('提出先')))
            <div class="absolute left-3/4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded -mx-1.5" role="alert">
                <strong class="font-bold">記入していない箇所があります</strong>
            </div>
        @endif
        <h2 class="my-5 text-base">課題を追加する</h2>
        <form action="" method="POST">
            @csrf
            <div class="flex mb-4">
                <label class="form-label my-2 mr-1" for="subject">
                    <img class="h-16 w-16" src="../../../img/book.svg"/>
                </label>
                <input class="form-input border-gray-500 shadow-none mx-3" id="subject" type="text" name="subject" placeholder="科目名" value="{{ old('subject') }}">
            </div>
            <div class="flex mb-4">
                <label class="form-label my-2 mr-1" for="task">
                    <img class="h-16 w-16" src="../../../img/task.svg"/>
                </label>
                <input class="form-input border-gray-500 shadow-none mx-3" id="task" type="text" name="task" placeholder="課題内容" value="{{ old('task') }}">
            </div>
            <div class="flex h-20 mb-4">
                <label class="form-label my-2 mr-1" for="deadline">
                    <img class="object-cover h-16 w-16" src="../../../img/date.svg"/>
                </label>
                <input class="w-36 mx-2 bg-gray-200 rounded-md px-4 py-2" id="deadline" type="date" name="deadline" value="{{ old('deadline') }}">
                <input class="w-36 bg-gray-200 rounded-md" id="deadline_time" type="time" name="deadline_time" value="{{ old('deadline_time') }}">
            </div>
            <div class="flex mb-4">
                <label class="form-label my-2 mr-1" for="submission_place">
                    <img class="h-16 w-16" src="../../../img/propose.svg"/>
                </label>
                <select name="place" class="ml-2">
                    <option value="">提出先</option>
                    <option value="Webclass">Webclass</option>
                    <option value="Teams">Teams</option>
                    <option value="授業時">授業時</option>
                </select>
            </div>
            <div class="flex mb-4">
                <label class="form-label my-2 mr-1" for="tags">
                    <img class="h-16 w-16" src="../../../img/tags.svg"/>
                </label>
                <input class="form-input border-gray-500 shadow-none mx-3" id="tags" type="text" name="tags" placeholder="タグ" value="{{ old('subject') }}">
            </div>
            <div class="flex mb-4">
                <label class="form-label my-2 mr-1" for="notes">
                    <img class="h-16 w-16" src="../../../img/memo.svg"/>
                </label>
                <textarea class="appearance-none border border-gray-500 rounded w-full py-2 px-3 text-gray-700 mx-3 resize-none" id="notes" name="notes" placeholder="コメント">{{ old('notes') }}</textarea>
            </div>
            <div class="flex items-center justify-end mx-4 my-5">
                <button class="m-2.5 bg-white hover:bg-gray-100 text-gray-400 border border-gray-400 font-bold py-3 px-5 rounded focus:outline-none focus:shadow-outline" type="button" onclick="window.history.back();">
                    キャンセル
                </button>
                <input class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-3 px-5 rounded focus:outline-none focus:shadow-outline" type="submit" value="決定" onclick="location.href='./home'" />
            </div>
        </form>
    </div>
</body>
</html>

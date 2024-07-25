<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>CreateTodo Page</title>
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen w-full">
    <div class="container" id="menu">
        @if ($errors->any() && ($errors->has('subject_name') || $errors->has('title') || $errors->has('deadline') || $errors->has('place')))
            <div class="absolute left-3/4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded -mx-1.5" role="alert">
                <strong class="font-bold">記入していない箇所があります</strong>
            </div>
        @endif
        <h2 class="my-5 text-base">課題を追加する</h2>
        <form action="{{ route('todos.store') }}" method="POST">
            @csrf
            <div class="flex mb-4">
                <label class="form-label my-2 mr-1" for="tags">
                    <img class="h-16 w-16" src="../../../img/tags.svg"/>
                </label>
                <select class="form-input border-greens-500 shadow-none mx-3" id="group_id" name="group_id" onchange="fetchSubjects(this.value)">
                    <option value="">グループを選択</option>
                    @foreach ($groups as $group)
                        <option value="{{ $group->id }}">
                            {{ $group->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="flex mb-4">
                <label class="form-label my-2 mr-1" for="subject_name">
                    <img class="h-16 w-16" src="../../../img/book.svg"/>
                </label>
                <select class="form-input border-green-500 shadow-none mx-3" id="subject_id" name="subject_id">
                    <option value="">科目を選択</option>
                    <!-- 科目のオプションはここに動的に追加されます -->
                </select>
            </div>
            <div class="flex mb-4">
                <label class="form-label my-2 mr-1" for="title">
                    <img class="h-16 w-16" src="../../../img/task.svg"/>
                </label>
                <input class="form-input border-green-500 shadow-none mx-3" id="title" type="text" name="title" placeholder="課題内容" value="{{ old('title') }}">
            </div>
            <div class="flex h-20 mb-4">
                <label class="form-label my-2 mr-1" for="deadline">
                    <img class="object-cover h-16 w-16" src="../../../img/date.svg"/>
                </label>
                <input class="w-36 mx-2 bg-green-200 rounded-md px-4 py-2" id="deadline" type="date" name="deadline" value="{{ old('deadline') }}">
                <input class="w-36 bg-green-200 rounded-md" id="deadline_time" type="time" name="deadline_time" value="{{ old('deadline_time') }}">
            </div>
            <div class="flex mb-4">
                <label class="form-label my-2 mr-1" for="place">
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
                <label class="form-label my-2 mr-1" for="description">
                    <img class="h-16 w-16" src="../../../img/memo.svg"/>
                </label>
                <textarea class="appearance-none border border-green-500 rounded w-full py-2 px-3 text-green-700 mx-3 resize-none" id="description" name="description" placeholder="コメント">{{ old('description') }}</textarea>
            </div>
            <div class="flex items-center justify-end mx-4 my-5">
                <button class="m-2.5 bg-white hover:bg-gray-100 text-green-400 border border-green-400 font-bold py-3 px-5 rounded focus:outline-none focus:shadow-outline" type="button" onclick="window.history.back();">
                    キャンセル
                </button>
                <input class="bg-green-400 hover:bg-green-500 text-white font-bold py-3 px-5 rounded focus:outline-none focus:shadow-outline" type="submit" value="決定" />
            </div>
        </form>
    </div>
    <script>
        function fetchSubjects(groupId) {
            if (groupId) {
                fetch(`/api/groups/${groupId}/subjects`)
                    .then(response => response.json())
                    .then(data => {
                        const subjectSelect = document.getElementById('subject_id');
                        subjectSelect.innerHTML = '<option value="">科目を選択</option>';
                        data.forEach(subject => {
                            const option = document.createElement('option');
                            option.value = subject.id;
                            option.textContent = subject.name;
                            subjectSelect.appendChild(option);
                        });
                    })
                    .catch(error => console.error('Error:', error));
            }
        }
    </script>
</body>
</html>

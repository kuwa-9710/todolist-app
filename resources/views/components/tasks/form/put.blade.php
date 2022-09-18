<div class="max-w-4xl mx-auto">
    <form action="/tasks" method="post" class="min-w-full">
        @csrf
        <div class=" bg-white rounded-3xl px-5 py-6 drop-shadow-md">
            <label class="w-full">
                <input
                    class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-lg py-4 pl-4 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                    placeholder="enter your to-do list..." type="text" name="task_name" />
            </label>
            @error('task_name')
                <div class="mt-3">
                    <p class="text-red-500">
                        {{ $message }}
                    </p>
                </div>
            @enderror
            <div class="mt-5 w-full flex justify-end">
                <button type="submit"
                    class="py-3 px-9 bg-blue-500 text-white max-w-xs hover:bg-blue-600 transition-colors rounded-lg">
                    Add.
                </button>
            </div>
        </div>
    </form>
</div>

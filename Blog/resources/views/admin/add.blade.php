@extends("admin-layout")

@section("content")
    <h1>Admin Home page</h1>
    <div>
        <form class="max-w-sm mx-auto" method="POST" action="{{ route('admin.add.menu.item') }}">
            @csrf()
        <div class="mb-5">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Text</label>
            <input name="text" type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type text" required>
        </div>
        <div class="mb-5">
            <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
            <input name="href" type="text" id="link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type Link" required>
        </div>
        <div class="mb-5">
            <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
            <input name="z-index" type="text" id="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type Position" required>
        </div>
        <div class="flex items-start mb-5">
            <div class="flex items-center h-5">
            <input name="new_window" id="new" type="checkbox" value="new" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
            </div>
            <label for="new" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">New Window</label>
        </div>
        <div class="flex items-start mb-5">
            <div class="flex items-center h-5">
            <input name="footer" id="new" type="checkbox" value="new" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
            </div>
            <label for="new" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Footer</label>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
        </form>
    </div>
@endsection
<x-app-layout>
    <x-slot name="title">
        Edit
    </x-slot>
    <div class="h-screen relative flex justify-center items-center bg-white dark:bg-slate-900">

        <x-back-link></x-back-link>

        <div class="container max-w-5xl p-4">
            <div class="mx-auto p-6 bg-slate-300 dark:bg-slate-800 rounded-lg shadow-lg overflow-hidden">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-slate-200 mb-4">Edit Project</h2>
                <form action="{{ route('project.edit', ['id' => $project->id]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700 dark:text-slate-300">Title</label>
                        <input value="{{$project->title}}" type="text" id="title" name="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-slate-300">Description</label>
                        <textarea id="description" name="description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md">{{$project->description}}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-gray-700 dark:text-slate-300">Price</label>
                        <input value="{{$project->price}}" type="text" id="price" name="price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="category" class="block text-sm font-medium text-gray-700 dark:text-slate-300">Category</label>
                        <select id="category" name="category_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700 dark:text-slate-300">Status</label>
                        <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white dark:bg-slate-900 dark:border-gray-600 dark:text-slate-200 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="active">Active</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Edit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
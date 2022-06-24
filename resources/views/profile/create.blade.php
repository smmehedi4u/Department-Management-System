<x-app-layout>
    <x-slot name="title">
        Add Notice
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Notice') }}
        </h2>
    </x-slot>

    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form :action=" route('admin.notice.store')" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="title" value="{{ old('title') }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('title') text-red-600 @enderror">
                                Notice Title
                            </label>
                            <input autofocus="true" type="text" id="title" name="title" value="{{ old('title') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('title') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter Title Here" required="">

                            @error('title')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 @error('body') text-red-600 @enderror">
                                Notice Details
                            </label>
                            <textarea id="message" name="body" rows="4"
                                class="
                                block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('body') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror "
                                placeholder="Details">{{ old('body') }}</textarea>

                            @error('body')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 @error('file') text-red-600 @enderror"
                                for="user_avatar">Upload
                                file</label>
                            <input name="file"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('file') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror"
                                aria-describedby="user_avatar_help" id="file" type="file">

                            @error('file')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
                            Add </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

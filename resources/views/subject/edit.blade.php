<x-app-layout>
    <x-slot name="title">
        Edit Subject
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Subject') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form :action=" route('admin.subject.store')" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="name" value="{{ $subject->name }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('name') text-red-600 @enderror">
                                Course
                            </label>
                            <input autofocus="true" type="string" id="name" name="name" value="{{ $subject->name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter course name" required="">

                            @error('name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="course_code" value="{{ $subject->course_code }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('course_code') text-red-600 @enderror">
                                Code
                            </label>
                            <input autofocus="true" type="string" id="course_code" name="course_code" value="{{ $subject->course_code }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('course_code') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter course code" required="">

                            @error('course_code')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="semester" value="{{ $subject->semester }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('semester') text-red-600 @enderror">
                                Semester
                            </label>
                            <input autofocus="true" type="integer" id="semester" name="semester" value="{{ $subject->semester }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('semester') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter semester no" required="">

                            @error('semester')
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

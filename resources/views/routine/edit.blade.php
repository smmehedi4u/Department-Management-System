<x-app-layout>
    <x-slot name="title">
        Edit Routine
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Routine') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form :action=" route('admin.routine.store')" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="batch_id" value="{{ $routine->batch_id }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('date') text-red-600 @enderror">
                                Batch
                            </label>
                            <input autofocus="true" type="integer" id="batch_id" name="batch_id" value="{{ $routine->batch_id }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('batch_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter batch id" required="">

                            @error('batch_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="subject_id" value="{{ $routine->subject_id }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('date') text-red-600 @enderror">
                                Course
                            </label>
                            <input autofocus="true" type="integer" id="subject_id" name="subject_id" value="{{ $routine->subject_id }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('subject_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter batch id" required="">

                            @error('subject_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="teacher_id" value="{{ $routine->teacher_id }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('teacher_id') text-red-600 @enderror">
                                Teacher
                            </label>
                            <input autofocus="true" type="integer" id="teacher_id" name="teacher_id" value="{{ $routine->teacher_id }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('teacher_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter teacher id" required="">

                            @error('teacher_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="day" value="{{ $routine->day }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('day') text-red-600 @enderror">
                                Day
                            </label>
                            <input autofocus="true" type="day" id="day" name="day" value="{{ $routine->day }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('day') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                 placeholder="Enter day" required="">

                            @error('day')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>



                        <div class="mb-6">
                            <label for="from_time" value="{{ $routine->from_time }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('from_time') text-red-600 @enderror">
                                Start
                            </label>
                            <input autofocus="true" type="time" id="from_time" name="from_time" value="{{ $routine->from_time }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('from_time') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter start time" required="">

                            @error('from_time')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="to_time" value="{{ $routine->to_time }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('to_time') text-red-600 @enderror">
                                End
                            </label>
                            <input autofocus="true" type="time" id="to_time" name="to_time" value="{{ $routine->to_time }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('to_time') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter result type" required="">

                            @error('to_time')
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

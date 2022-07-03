<x-app-layout>
    <x-slot name="title">
        Add Routine
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Routine') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form :action=" route('admin.routine.store')" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="batch_id"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('date') text-red-600 @enderror">
                                Batch
                            </label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('batch_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                            name="batch_id" id="" required>
                            <option value="">Select Batch</option>

                            @foreach ($batches as $batch)
                                <option value="{{$batch->id}}">{{$batch->name}}</option>
                            @endforeach
                        </select>

                            @error('batch_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="subject_id"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('date') text-red-600 @enderror">
                                Subject
                            </label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('subject_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                            name="subject_id" id="" required>
                            <option value="">Select Subject</option>

                            @foreach ($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                            @endforeach
                        </select>

                            @error('subject_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                                <label for="teacher_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 @error('date') text-red-600 @enderror">
                                    Teacher
                                </label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('subject_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                name="teacher_id" id="" required>
                                <option value="">Select Teacher</option>

                                @foreach ($teachers as $teacher)
                                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                @endforeach
                            </select>

                                @error('teacher_id')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span> {{ $message }}</p>
                                @enderror
                        </div>
                        <div class="mb-6">
                            <label for="subject_id"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('date') text-red-600 @enderror">
                                Day
                            </label>
                            @php
                                $days = array('Sunday','Monday', 'Tuesday', 'Wednesday','Thursday','Friday','Saturday');
                            @endphp
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('day') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                            name="day" id="" required>
                            <option value="">Select Day</option>

                            @foreach ($days as $day)
                                <option value="{{$day}}">{{$day}}</option>
                            @endforeach
                        </select>

                            @error('day')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>



                        <div class="mb-6">
                            <label for="from_time" value="{{ old('from_time') }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('from_time') text-red-600 @enderror">
                                Start
                            </label>
                            <input autofocus="true" type="time" id="from_time" name="from_time" value="{{ old('from_time') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('from_time') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                placeholder="Enter start time" required="">

                            @error('from_time')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="to_time" value="{{ old('to_time') }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('to_time') text-red-600 @enderror">
                                End
                            </label>
                            <input autofocus="true" type="time" id="to_time" name="to_time" value="{{ old('to_time') }}"
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

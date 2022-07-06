<x-app-layout>
    <x-slot name="title">
        Edit Task
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form :action=" route('admin.task.store')" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="subject_id" value="{{ $task->subject_id }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('subject_id') text-red-600 @enderror">
                                Subject
                            </label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('batch_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                            name="subject_id" id="" required>
                            @foreach ($subjects as $subject)
                                <option @if ($task->subject_id==$subject->id)
                                    selected
                                @endif value="{{$subject->id}}">{{$subject->name}}</option>
                            @endforeach
                        </select>

                            @error('subject_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="batch_id" value="{{ $task->batch_id }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('batch_id') text-red-600 @enderror">
                                Batch
                            </label>
                            <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('batch_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                            name="batch_id" id="" required>
                            @foreach ($batches as $batch)
                                <option @if ($task->batch_id==$batch->id)
                            selected
                                @endif value="{{$batch->id}}">{{$batch->name}}</option>
                            @endforeach
                        </select>

                            @error('result_type')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 @error('details') text-red-600 @enderror">
                                 Details
                            </label>
                            <textarea id="details" name="details" rows="4"
                                class="
                                block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('details') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror "
                                placeholder="Details">
                                    {{ $task->details }}
                            </textarea>

                            @error('details')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="end_date" value="{{ $task->end_date }}"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('end_date') text-red-600 @enderror">
                                End date
                            </label>
                            <input autofocus="true" type="date" id="end_date" name="end_date" value="{{ $task->end_date }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('end_date') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                 required="">

                            @error('end_date')
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

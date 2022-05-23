<x-app-layout>
    <x-slot name="title">
        Add Designation
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Designation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                <div class="p-6 bg-white border-b border-gray-200"> 

                    <form :action=" route('admin.designation.store')" method="post" enctype="multipart/form-data">
                    @csrf

                        <div class="mb-6">
                                <label for="title" 
                                    class="block mb-2 text-sm font-medium text-gray-900 @error('title') text-red-600 @enderror">
                                    Title
                                </label>
                                <input autofocus="true" type="text" id="title" name="title"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('title') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    placeholder="Enter title here" required="">
                                    
                                @error('title')
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

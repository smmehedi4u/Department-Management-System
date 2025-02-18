<x-app-layout>
    <x-slot name="title">
        Edit Profile
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form :action=" route('teacher.profile.store')" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 @error('title') text-red-600 @enderror">
                                Full Name
                            </label>
                            <input autofocus="true" type="text" id="name" name="name" value="{{ $user->name }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('name') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                 required="">

                            @error('name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="body"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400 @error('body') text-red-600 @enderror">
                                Email
                            </label>
                            <input autofocus="true" type="email" id="email" name="email" value="{{ $user->email }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('email') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                 required="">

                            @error('email')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 @error('designation_id') text-red-600 @enderror"
                                for="user_avatar">Designation</label>

                                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  @error('batch_id') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror  "
                                name="designation_id" id="" required>
                                @foreach ($designations as $designation)
                                        <option value="{{ $designation->id }}"
                                            @if (isset($profile) && $profile->designation_id == $designation->id)
                                                selected
                                            @endif>
                                            {{ $designation->title }}
                                        </option>
                                    @endforeach
                            </select>

                            @error('designation_id')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 @error('file') text-red-600 @enderror"
                                for="user_avatar">Mobile</label>
                            <input name="mobile" value="{{ $profile ? $profile->mobile : '' }}"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('file') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror"
                                aria-describedby="user_avatar_help" id="mobile" type="text">

                            @error('mobile')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 @error('address') text-red-600 @enderror"
                                for="user_avatar">Address</label>

                                <textarea id="address" name="address" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('address') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror "
                                > {{ $profile ? $profile->address : ''  }} </textarea>

                            @error('address')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label
                                class="block mb-2 text-sm font-medium   text-gray-900 @error('image') text-red-600 @enderror"
                                for="user_avatar">Profile Image</label>
                            <input name="image"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('image') bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 @enderror"
                                aria-describedby="user_avatar_help" id="file" type="file">

                            @error('image')
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

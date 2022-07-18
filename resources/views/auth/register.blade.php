<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

             <!-- Select Option Rol type -->
             <div class="mt-4">
                <x-label for="role_id" value="{{ __('Register as:') }}" />
                <select name="role_id" id="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="0">Student</option>
                    <option value="1">Teacher</option>
                </select>
             </div>
             <div id="batch" class="mt-4 batch">
                <x-label for="batch_id" value="{{ __('Batch:') }}" />
                <select name="batch_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="">Select Batch</option>
                    @foreach ($batches as $batch)
                    <option value="{{$batch->id}}">{{$batch->name}}</option>
                    @endforeach
                </select>
             </div>

             <div id="designation" class="mt-4 hidden">
                <x-label for="designation_id" value="{{ __('Designation:') }}" />
                <select name="designation_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="">Select Designation</option>
                    @foreach ($degis as $d)
                    <option value="{{$d->id}}">{{$d->title}}</option>
                    @endforeach
                </select>
             </div>
             <div>
                <x-label for="mobile" :value="__('Mobile')" />

                <x-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required />
            </div>
            <div>
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required  />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var role = document.getElementById('role');
                var batch = document.getElementById('batch');
                var designation = document.getElementById('designation');
                role.addEventListener('change', function() {
                    if (role.value == 0) {
                        batch.classList.remove('hidden');
                        designation.classList.add('hidden');
                    } else {
                        batch.classList.add('hidden');
                        designation.classList.remove('hidden');
                    }
                });
            });
        </script>
    </x-auth-card>
</x-guest-layout>

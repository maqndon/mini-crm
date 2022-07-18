<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                </div>
                
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <form method="POST" action="{{ route('employees.store') }}">
                        @csrf
                        <div class="mt-4">
                            {{-- first name --}}
                            <x-label for="name" :value="__('First Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />

                        </div>
                        <div class="mt-4">
                            {{-- last name --}}
                            <x-label for="name" :value="__('Last Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required/>

                        </div>
                            <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                        </div>
                        <div class="mt-4">
                            <x-label for="website" :value="__('Phone')" />

                            <x-input id="website" class="block mt-1 w-full" type="text" name="website" :value="old('website')" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Create Employee') }}
                            </x-button>
                        </div>

                    </form>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
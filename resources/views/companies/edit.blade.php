<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{ 'Edit Company' }}
                </div>
                
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{-- class mt-4 --}}
                    <form method="POST" action="{{ route('companies.update', $company) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            {{-- name --}}
                            <x-label for="name" :value="__('Name')" />
                            {{-- <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus /> --}}
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$company->name" required autofocus />
                            
                        </div>
                            <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$company->email" />
                        </div>
                        <div class="mt-4">
                            <x-label for="website" :value="__('Website')" />

                            <x-input id="website" class="block mt-1 w-full" type="text" name="website" :value="$company->website" />
                        </div>

                        @if (!$company->logo)
                            <div class="mt-4">
                                <x-label for="logo" :value="__('Logo')" />

                                <x-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('$company->logo')" />
                            </div>
                        @endif
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Edit Company') }}
                            </x-button>
                        </div>

                    </form>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

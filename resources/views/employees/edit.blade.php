<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{ 'Edit Employee' }}
                </div>
                
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-2">
                    {{-- class mt-4 --}}
                    <form method="POST" action="{{ route('employees.update', $employee) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mt-4">
                            {{-- first name --}}
                            <x-label for="first_name" :value="__('First Name')" />
                            <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="$employee->first_name" required autofocus />
                            
                        </div>
                        <div class="mt-4">
                            {{-- last name --}}
                            <x-label for="last_name" :value="__('Last Name')" />
                            <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="$employee->last_name" required autofocus />
                            
                        </div>
                            <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$employee->email" />
                        </div>
                            <!-- Phone -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('Phone')" />
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="$employee->phone" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button>
                                {{ __('Edit Employee') }}
                            </x-button>
                        </div>

                    </form>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

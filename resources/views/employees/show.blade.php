<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Employee Details</p>
                </div>
                <div class="p-6 text-gray-700">
                    
                    <div class="p-2 border">
                        <p class="inline-block">First Name: </p> {{ $employee->first_name }}
                    </div>

                    <div class="p-2 border">
                        <p class="inline-block">Last Name: </p> {{ $employee->last_name }}
                    </div>
                    
                    <div class="p-2 border-l border-r">
                        <p class="inline-block">Email: </p> {{ $employee->email }}
                    </div>
                    
                    <div class="p-2 border">
                        <p class="inline-block">Phone: </p> {{ $employee->phone }}
                    </div>
                    
                    <div class="flex items-center justify-end mt-4">
                        <form>
                            <x-button>
                                <a href={{ route('employees.edit', $employee->id) }}>{{ __('Edit') }}</a>
                            </x-button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
</x-app-layout>

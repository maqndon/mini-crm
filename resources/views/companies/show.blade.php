<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12 table mx-auto">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 float-left">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Company Details</p>
                </div>
                {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">Companies List</div> --}}
                <div class="p-6 text-gray-700">
                    
                    <div class="p-2">
                        <img src="{{ URL($company->logo) }}" alt="">
                    </div>

                    <div class="p-2 border">
                        <p class="inline-block">Name: </p> {{ $company->name }}
                    </div>
                    
                    <div class="p-2 border-l border-r">
                        <p class="inline-block">Email: </p> {{ $company->email }}
                    </div>
                    
                    <div class="p-2 border">
                        <p class="inline-block">Website: </p>    {{ $company->website }}
                    </div>
                    
                    <form action="">
                        <x-button class="ml-4">
                            <a href={{ route('companies.edit', $company->id) }}>{{ __('Edit') }}</a>
                        </x-button>
                    </form>

                </div>

            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 float-left">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Company Employees</p>
                    <div class="p-6 text-gray-700">
                        <table>
                            <tr class="text-gray-600 bg-gray-100 border-t border-r border-l">
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                            @foreach ($employees as $employee )
                            <tr>
                                <td class="px-2 border-l border-b border-t"><a href="{{ route('employees.show', $employee->id) }}">{{ $employee->first_name }} {{ $employee->last_name }}</a></td>  
                                <td class="px-2 border-l border-b border-t">{{ $employee->email }}</td>    
                                <td class="px-2 border-l border-b border-t border-r">{{ $employee->phone }}</td>    
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    {{ $employees->links() }}
                </div>
            </div>
        </div>    
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="GET" action="{{ route('companies.create') }}">
                    <x-button class="ml-4">
                        {{ __('Create new company') }}
                    </x-button>
                    </form>
                    
                    {{-- If the company was store will appear this message --}}
                    @if (session('status'))
                        <div class="text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
                
                
                <table class="p-2 w-full">
                    <tr class="text-gray-600 bg-gray-100">
                        {{-- <th>Logo</th> --}}
                        <th>Name</th>
                        <th class="border-r border-l">Email</th>
                        <th>Website</th>
                    </tr>
                @foreach ( $companies as $company)
                    <tr>
                        {{-- <td>Logo</th> --}}
                        <td class="px-2 border-l border-b border-t"><a href="{{ route('companies.show', $company) }}">{{ $company->name }}</a></td>
                        <td class="px-2 border-l border-b border-t">{{ $company->email }}</td>
                        <td class="px-2 border-l border-b border-t">{{ $company->website }}</td>
                        <td class="border-l border-b border-t">
                            <x-button class="">
                                <a href={{ route('companies.edit', $company) }}>{{ __('Edit') }}</a>
                            </x-button>
                        </td>
                        <td class="border-b border-t">
                            <form method="POST" onclick="return confirm('Are you sure?')" action="{{ route('companies.destroy', $company) }}">
                                @csrf
                                @method('DELETE')
                                <x-button class="">
                                    {{ __('Delete') }}
                                </x-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </table>
                {{-- pagination --}}
                <div class="pl-3">{{ $companies->links() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>

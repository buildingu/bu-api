<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Genders') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <table class="tables-fixed w-full">
                <thead>
                    <tr class="bg-gray-100 font-bold">
                        <th class="border px-4 py-2 w-20">ID</th>
                        <th class="border px-4 py-2 w-20">Name</th>
                        <th class="border px-4 py-2 w-20">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (sizeof($genders) == 0)
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="3">No genders found.</td>
                        </tr>
                    @else
                        @foreach($genders as $gender)
                            <tr class="class-center">
                                <td class="border px-4 py-2 text-center">{{ $gender->id }}</td>
                                <td class="border px-4 py-2 text-center">{{ $gender->name }}</td>        
                                <td class="border px-4 py-2 text-center">
                                    <button class="ml-4 bg-indigo-600 px-1 py-1 rounded"><x-fas-edit class="w-6 h-6 px-1 text-white"/></button>
                                    <button class="ml-4 bg-red-600 px-1 py-1 rounded"><x-fas-trash class="w-6 h-6 px-1 text-white"/></button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
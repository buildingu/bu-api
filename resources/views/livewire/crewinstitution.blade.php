<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Crew Institution') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <table class="tables-fixed w-full">
                <thead>
                    <tr class="bg-gray-100 font-bold">
                        <th class="border px-4 py-2 w-20">ID</th>
                        <th class="border px-4 py-2 w-20">Crew ID</th>
                        <th class="border px-4 py-2 w-20">Institution ID</th>
                        <th class="border px-4 py-2 w-20">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (sizeof($crewinstitution) == 0)
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="3">No crews or institutions found.</td>
                        </tr>
                    @else
                        @foreach($crewinstitution as $crewinstitutions)
                            <tr class="class-center">
                                <td class="border px-4 py-2 text-center">{{ $crewinstitutions->id }}</td>
                                <td class="border px-4 py-2 text-center">{{ $crewinstitutions->crew_id }}</td>
                                <td class="border px-4 py-2 text-center">{{ $crewinstitutions->institution_id }}</td>    
                                <td class="border px-4 py-2 text-center">
                                    @if ($crewinstitutions->id != 0)
                                    <button class="ml-4 bg-indigo-600 px-1 py-1 rounded"><x-fas-edit class="w-6 h-6 px-1 text-white"/></button>
                                    <button class="ml-4 bg-red-600 px-1 py-1 rounded"><x-fas-trash class="w-6 h-6 px-1 text-white"/></button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
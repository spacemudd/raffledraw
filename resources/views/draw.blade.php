<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Draw
        </h2>
    </x-slot>

    <div class="container py-12 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-12 gap-5">
            <div class="col-span-12">
                <table>
                    <colgroup>
                        <col>
                        <col style="width:1000px;">
                    </colgroup>
                    <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Entry date</th>
                    </thead>
                    <tbody>
                    @foreach ($winners as $key => $winner)
                        <tr class="bg-white border-b border-black border-2">
                            <td class="px-6 py-4 font-medium whitespace-nowrap border-2">{{ ++$key }}</td>
                            <td class="px-6 py-4 font-medium whitespace-nowrap border-2">{{ $winner->name }}</td>
                            <td class="px-6 py-4 font-medium whitespace-nowrap border-2">{{ $winner->mobile }}</td>
                            <td class="px-6 py-4 font-medium whitespace-nowrap border-2">{{ $winner->created_at }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

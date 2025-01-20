<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-12 max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
        <div class="grid  grid-cols-2 lg:grid-cols-12 gap-5">
            <div class="col-span-2">
                <div class="bg-yellow-300 p-5 rounded">
                    <p class="text-xs">Total Entries</p>
                    <h1 class="2xlg">{{ $totalCount }}</h1>
                </div>
            </div>
            <div class="col-span-2">
                <div class="bg-yellow-300 p-5 rounded">
                    <p class="text-xs">Last entry</p>
                    <h1 class="2xlg">{{ $totalCount }}</h1>
                </div>
            </div>
        </div>

        <section class="mt-5">
            <h2 class="font-bold">Actions</h2>
            <div class="grid lg:grid-cols-12 gap-5 mt-3">
                <div class="col-span-4">
                    <a href="{{ route('contests.draw') }}" class="bg-teal-500 rounded p-2 text-sm text-white">
                        Draw (5 winners out of {{ $totalCount }})
                    </a>
                    <br/>
                    <br/>
                    <a href="{{ route('contests.download') }}" class="bg-teal-500 rounded p-2 text-sm text-white">Download (.csv)</a>
                </div>
                <div class="col-span-4">

                </div>
            </div>
        </section>
    </div>
</x-app-layout>

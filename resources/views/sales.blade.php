<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:sales.dashboard/>
            <div class="my-2.5 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:sales />
            </div>
        </div>
    </div>
</x-app-layout>

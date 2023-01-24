<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Store') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <livewire:store.dashboard/>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-2.5">
                <livewire:store />
            </div>
        </div>
    </div>
</x-app-layout>

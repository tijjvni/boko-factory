<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @switch(request()->url())
                @case(route('sales.orders.show',request()->route('order') ?? 0))
                    <nav class="bg-grey-light rounded-md w-full mb-5 text-sm">
                        <ol class="list-reset flex">
                            <li><a href="{{ route('dashboard') }}" class="text-indigo-600 hover:text-indigo-700">Home</a></li>
                            <li><span class="fa fa-chevron-right text-gray-500 mx-2"></span></li>
                            <li><a href="{{ route('sales.orders') }}" class="text-indigo-600 hover:text-indigo-700">Orders</a></li>
                            <li><span class="fa fa-chevron-right text-gray-500 mx-2"></span></li>
                            <li class="text-gray-500">Showing Order </li>
                        </ol>
                    </nav>
                    @break
                @default
                <livewire:sales.dashboard/>
            @endswitch            
            <div class="my-2.5 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @switch(request()->url())
                    @case(route('sales.orders.show',request()->route('order') ?? 0))
                        <livewire:sales.order />
                        @break
                    @default
                    <livewire:sales />
               @endswitch     
            </div>
        </div>
    </div>
</x-app-layout>

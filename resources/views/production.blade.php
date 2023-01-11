<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Production') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 px-3 md:px-5 ">

            @switch(request()->url())
                @case(route('production.add'))
                    <nav class="bg-grey-light rounded-md w-full mb-5">
                        <ol class="list-reset flex">
                            <li><a href="{{ route('dashboard') }}" class="text-indigo-600 hover:text-indigo-700">Home</a></li>
                            <li><span class="fa fa-chevron-right text-gray-500 mx-2"></span></li>
                            <li><a href="{{ route('production') }}" class="text-indigo-600 hover:text-indigo-700">Production</a></li>
                            <li><span class="fa fa-chevron-right text-gray-500 mx-2"></span></li>
                            <li class="text-gray-500">Create </li>
                        </ol>
                    </nav>
                    @break
                @default
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-5">
                        <x-dashboard-stat-card title="Production" value="0" info="ongoing">
                            <i class="fa fa-tools"></i>
                        </x-dashboard-stat-card>
                        <x-dashboard-stat-card title="Materials" value="4" info="running low" class="bg-yellow-5000">
                            <i class="fa fa-list"></i>
                        </x-dashboard-stat-card>
                        <x-dashboard-stat-card title="Orders" value="7" info="pending">
                            <i class="fa fa-archive"></i>
                        </x-dashboard-stat-card>
                    </div>                
           @endswitch


            <div class="mb-5">
                <x-jet-banner message="New notification for production"/>                
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @switch(request()->url())
                    @case(route('production.add'))
                        <livewire:production.create />
                        @break
                    @default
                        <livewire:production.index />                    
               @endswitch
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Production') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 px-3 md:px-5 ">

            @switch(request()->url())
                @case(route('production.show',request()->route('production') ?? 0))
                    <nav class="bg-grey-light rounded-md w-full mb-5 text-sm">
                        <ol class="list-reset flex">
                            <li><a href="{{ route('dashboard') }}" class="text-indigo-600 hover:text-indigo-700">Home</a></li>
                            <li><span class="fa fa-chevron-right text-gray-500 mx-2"></span></li>
                            <li><a href="{{ route('production') }}" class="text-indigo-600 hover:text-indigo-700">Production</a></li>
                            <li><span class="fa fa-chevron-right text-gray-500 mx-2"></span></li>
                            <li class="text-gray-500">Showing Production </li>
                        </ol>
                    </nav>
                    @break
                @case(route('production.add'))
                    <nav class="bg-grey-light rounded-md w-full mb-5 text-sm">
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
               
           @endswitch
           

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @switch(request()->url())
                    @case(route('production.show',request()->route('production') ?? 0))
                        <livewire:production.show />
                        @break
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

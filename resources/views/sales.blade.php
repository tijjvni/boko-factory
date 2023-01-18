<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-5">
                <x-dashboard-stat-card title="Sales" value="N25,500,450" info="total">

                   <select class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat outline-none rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                        <option value="1">Today</option>
                        <option value="2">This week</option>
                        <option value="3">This month</option>
                        <option value="3">All time</option>
                    </select>


                </x-dashboard-stat-card>
                <x-dashboard-stat-card title="Orders" value="3" info="pending" />
                <x-dashboard-stat-card title="Production" value="1" info="requested">
                    <i class="fa fa-tools"></i>
                </x-dashboard-stat-card>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:sales />
            </div>
        </div>
    </div>
</x-app-layout>

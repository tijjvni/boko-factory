<div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-5">
        <x-dashboard-stat-card title="Sales" value="N{{number_format($sales,2)}}" info="total">

           <select class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat outline-none rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" wire:model="salesPeriod">
                <option value="{{ today()->toDateString() }}">Today</option>
                <option value="{{ (\Carbon\Carbon::parse('this week')->toDateString()) }}">This week</option>
                <option value="{{ (date('Y').'/'.date('n').'/1') }}">This month</option>
                <option value="2000/01/01">All time</option>
            </select>


        </x-dashboard-stat-card>
        <x-dashboard-stat-card title="Orders" value="{{$ordersPending}}" info="pending" />
        <x-dashboard-stat-card title="Orders" value="{{$orders}}" info="all">

        </x-dashboard-stat-card>
    </div>
    <span class="sm:block">
        <span onclick="Livewire.emit('openModal', 'sales.place-order')">
            <x-button value="Place order"/>
        </span>
    </span>    

</div>

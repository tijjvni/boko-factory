<div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div class="col-span-2">
              <div class="p-4 bg-gray-100 rounded-xl">
                <div class="font-bold text-xl text-gray-800 leading-none">Hi, {{ auth()->user()->name }}</div>
                <div class="mt-5">
                  <button type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                    No new notification
                  </button>
                </div>
              </div>
            </div>
            <x-dashboard-stat-card title="Sales" value="{{ $sales }}" info="total" class="bg-indigo-100 ">
               <select class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat outline-none rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" wire:model="salesPeriod">
                    <option value="{{ today()->toDateString() }}">Today</option>
                    <option value="{{ (\Carbon\Carbon::parse('this week')->toDateString()) }}">This week</option>
                    <option value="{{ (date('Y').'/'.date('n').'/1') }}">This month</option>
                    <option value="2000/01/01">All time</option>
                </select>                
            </x-dashboard-stat-card>
            <x-dashboard-stat-card title="Products" value="{{ $products }}" info="total" class="bg-indigo-100 ">
                &#8358;{{$productsValue}}
            </x-dashboard-stat-card>

        </div>
    </div>
</div>

<div>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-5">
        <!-- <x-dashboard-stat-card title="Products" value="N25,500,450" info="total">
           <select class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat outline-none rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                <option value="1">Today</option>
                <option value="2">This week</option>
                <option value="3">This month</option>
                <option value="3">All time</option>
            </select>
        </x-dashboard-stat-card> -->
        <x-dashboard-stat-card title="Products" value="{{ $products }}" info="total" />
        <x-dashboard-stat-card title="Products" value="N{{ number_format($productsValue,2) }}" info="value" />
        <x-dashboard-stat-card title="Materials" value="{{$materials}}" info="types"/>
    </div>

    <div class="flex">
        <span class="sm:block">
            <div class="flex justify-center">
              <div>
                <div class="dropdown relative">
                  <button type="button" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" id="dropdownMenuButton1d" data-bs-toggle="dropdown" aria-expanded="false">                      
                    Actions &nbsp;
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <ul class=" dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none"
                    aria-labelledby="dropdownMenuButton1d" >
                    <li>
                      <a class="  dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">Record Damages</a
                      >
                    </li>
                    <hr class="h-0 my-2 border border-solid border-t-0 border-gray-700 opacity-25" />
                    <li>
                      <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">Recover Damages</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

        </span>
        <span class="ml-3 sm:block">
            <span onclick="Livewire.emit('openModal', 'store.receive-supply')">
                <x-button value="Receive supply"/>
            </span>
        </span>

    </div>



</div>

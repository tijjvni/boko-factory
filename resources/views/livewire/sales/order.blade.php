<div class="p-5">

    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <h4 class="text-lg font-bold leading-7  sm:truncate sm:text-2xl sm:tracking-tight text-indigo-600">Order: {{ str_pad($order->id, 5, "0", STR_PAD_LEFT) }}</h4>
            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gray-100  rounded">&#8358;{{$order->amount}}</span>
                </div>
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <span class="mr-1.5 flex-shrink-0 text-gray-400 "></span>
                    <i class="h-3 w-3 fa fa-user"></i>&nbsp; {{$order->customer->person->first_name ?? 'N/A'}}
                </div>

              <div class="mt-2 flex items-center text-sm text-gray-500">
                <span class="mr-1.5 flex-shrink-0 text-gray-400 "></span>
                <i class="h-3 w-3 fa fa-clock"></i>&nbsp; {{ \Carbon\Carbon::parse($order->created_at)->diffForHumans()}}
              </div>
            </div>
        </div>
        <div class="mt-5 flex lg:mt-0 lg:ml-4">

            <span class="mx-1 sm:block">
                @switch($order->status)
                    @case('publish')
                        <span class="status">Publish</span>
                        @break         
                    @default
                        <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-yellow-300 text-yellow-900 rounded mx-1">pending</span>
                @endswitch
            </span>

            @if($order->status == 'pending')
                <span class="mx-1 sm:block">
                    <span wire:click="processOrder">
                        <div wire:loading wire:target="processOrder">
                            <x-button value="loading..."/>
                        </div>
                        <div wire:loading.remove wire:target="processOrder">
                            <x-button value="Process Order"/>
                        </div>

                    </span>
                </span>
            @endif


            <span class="mx-1 sm:block">
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
                          <a class="  dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">Add material</a
                          >
                        </li>
                        <hr class="h-0 my-2 border border-solid border-t-0 border-gray-700 opacity-25" />
                        <li>
                          <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">Separated link</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

            </span>

        </div>
    </div>

    <ol class="my-5 border-l border-gray-300">

        @foreach($order->products as $key => $product)
            <li>
                <div class="flex flex-start items-center pt-2">
                  <div class="bg-gray-300 w-2 h-2 rounded-full -ml-1 mr-3"></div>
                  <p class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($product->created_at)->diffForHumans()}}</p>
                </div>
                <div class="mt-0.5 ml-4 pb-5">
                    <h4 class="text-gray-800 font-semibold text-xl mb-1.5">
                        PRD{{ str_pad($product->product_id, 5, "0", STR_PAD_LEFT) }}: 
                        {{$product->product->name}}
                    </h4>
                  <p class="text-gray-500 mb-3">N{{ number_format($product->product->price,2) }} x {{$product->quantity}}</p>
                </div>
            </li>            
        @endforeach

        <li>
            <div class="flex flex-start items-center pt-2">
              <div class="bg-gray-300 w-2 h-2 rounded-full -ml-1 mr-3"></div>
              <p class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($order->created_at)->diffForHumans()}}</p>
            </div>
            <div class="mt-0.5 ml-4 pb-5">
              <h4 class="text-gray-800 font-semibold text-xl mb-1.5">Order Created</h4>
              <p class="text-gray-500 mb-3">Order is placed.</p>
            </div>
        </li>
    </ol>


</div>

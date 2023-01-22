<div class="p-5">
    <script type="text/javascript">
        document.getElementById("redirect").click();        
    </script>
    <!-- <button id="redirect" wire:click="sendToIndex()">CLick me now</button> -->

    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <h4 class="text-lg font-bold leading-7  sm:truncate sm:text-2xl sm:tracking-tight text-indigo-600">Production: {{ str_pad($production->id, 5, "0", STR_PAD_LEFT) }}</h4>
            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-indigo-600 text-white rounded">ongoing</span>
                </div>
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <span class="mr-1.5 flex-shrink-0 text-gray-400 "></span>
                    <i class="h-3 w-3 fa fa-user"></i>&nbsp; {{$production->user->name}}
                </div>

              <div class="mt-2 flex items-center text-sm text-gray-500">
                <span class="mr-1.5 flex-shrink-0 text-gray-400 "></span>
                <i class="h-3 w-3 fa fa-clock"></i>&nbsp; {{ \Carbon\Carbon::parse($production->created_at)->diffForHumans()}}
              </div>
            </div>
        </div>
        <div class="mt-5 flex lg:mt-0 lg:ml-4">
            <span class="sm:block">
                <div class="flex justify-center">
                  <div>
                    <div class="dropdown relative">
                      <button type="button" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" id="dropdownMenuButton1d" data-bs-toggle="dropdown" aria-expanded="false">                      
                        Documents &nbsp;
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <ul class=" dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none"
                        aria-labelledby="dropdownMenuButton1d" >
                        <li>
                          <a class="  dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">Waybill</a
                          >
                        </li>
                        <li>
                          <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700  hover:bg-gray-100 " href="#" >Another action</a>
                        </li>
                        <li>
                          <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#" >Something else here</a>
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

            <span class="ml-3 sm:block">
                <x-button></x-button>
            </span>

        </div>
    </div>

    <ol class="my-5 border-l border-gray-300">

        @foreach($production->materials as $key => $material)
          <li>
            <div class="flex flex-start items-center pt-2">
              <div class="bg-gray-300 w-2 h-2 rounded-full -ml-1 mr-3"></div>
              <p class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($material->created_at)->diffForHumans()}}</p>
            </div>
            <div class="mt-0.5 ml-4 pb-5">
              <h4 class="text-gray-800 font-semibold text-xl mb-1.5">{{ $material->material->name }}</h4>
              <p class="text-gray-500 mb-3">{{$material->quantity}} quantites of material is added.</p>
            </div>
          </li>

        @endforeach

        <li>
            <div class="flex flex-start items-center pt-2">
              <div class="bg-gray-300 w-2 h-2 rounded-full -ml-1 mr-3"></div>
              <p class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($production->created_at)->diffForHumans()}}</p>
            </div>
            <div class="mt-0.5 ml-4 pb-5">
              <h4 class="text-gray-800 font-semibold text-xl mb-1.5">Production starts</h4>
              <p class="text-gray-500 mb-3">Production is started.</p>
            </div>
        </li>


    </ol>


</div>

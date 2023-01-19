<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-5">
        <x-dashboard-stat-card title="Customers" value="25" info="all"/>
        <x-dashboard-stat-card title="Customers" value="8" info="Placed Order"/>
    </div>

    <div class="flex">
        <a class="ml-3 sm:block" href="{{route('config.users.add.customers')}}">
            <x-button value="New customer"/>
        </a>
    </div>

    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full text-center">
              <thead class="border-b bg-gray-50">
                <tr>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    #
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Customer
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Contact
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Orders
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Status
                  </th>
                </tr>
              </thead class="border-b">
              <tbody>
                @for($x=0;$x<5;$x++)
                    <tr class="bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$x+1}}</td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <!-- <a href="/production/1"></a> -->
                        SL{{ str_pad($x, 5, "0", STR_PAD_LEFT) }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        &#8358;{{number_format(rand(10000,50000),2)}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-600 text-white rounded-full">completed</span> 
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{auth()->user()->name}}
                      </td>
                    </tr class="bg-white border-b">

                @endfor

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

</div>
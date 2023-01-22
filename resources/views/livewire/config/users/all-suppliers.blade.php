<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-5">
        <x-dashboard-stat-card title="Suppliers" value="{{$allSuppliers}}" info="all"/>
        <x-dashboard-stat-card title="Suppliers" value="{{$allSuppliersWithSupplies}}" info="Supplied Materials"/>
    </div>

    <div class="flex">
        <a class="ml-3 sm:block" href="{{route('config.users.add.suppliers')}}">
            <x-button value="New Supplier"/>
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
                    Supplier
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Contact
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Supplies
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Status
                  </th>
                </tr>
              </thead class="border-b">
              <tbody>
                @foreach($suppliers as $key => $supplier)
                    <tr class="bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        SPL{{ str_pad($supplier->id, 5, "0", STR_PAD_LEFT) }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $supplier->person->first_name.' '.$supplier->person->last_name }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ isset($supplier->person->contact->phone) ?? 'N/A' }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ count($supplier->supplies)}}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        @if($supplier->is_active)
                            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-green-600 text-white rounded-full">active</span> 
                        @else 
                            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-red-600 text-white rounded-full">inactive</span> 
                        @endif
                      </td>
                    </tr class="bg-white border-b">
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

</div>

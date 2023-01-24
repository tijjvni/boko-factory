<div>

    @if(count($productions))

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
                        Production
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                        Status
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                        By
                      </th>
                    </tr>
                  </thead class="border-b">
                  <tbody>
                    @foreach($productions as $key => $production)
                        <tr class="bg-white border-b">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$key + 1}}</td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('production.show', ['production' => $production->id]) }}" class="text-indigo-600">
                                PRD{{ str_pad($production->id, 5, "0", STR_PAD_LEFT) }}
                            </a>
                          </td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <span class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-indigo-600 text-white rounded-full">{{$production->status}}</span> 
                          </td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$production->user->name}}
                          </td>
                        </tr class="bg-white border-b">
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

    @else
        <div
            class="w-full py-5 flex-grow flex flex-col
            bg-gray-50 rounded-lg text-gray-500 ">

            <div class="flex flex-col items-center mt-12">
                <i class="fa fa-tools text-4xl"></i>
                <span class="font-bold mt-8">No onoging production</span>

                <a href="{{ route('production.add') }}">
                   <button type="button" class="mt-5 px-6 py-2.5 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">Create Production</button>                    
                </a>
            </div>
        </div>
    @endif

</div>

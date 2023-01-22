<div>

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
                @forelse($productions as $key => $production)
                    <tr class="bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$key + 1}}</td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('production.show', ['production' => $production->id]) }}">
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

                @empty
                    <tr class="bg-white border-b">
                        <td colspan="4">
                            No production recorded yet
                        </td>
                    </tr>
                @endforelse

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

</div>

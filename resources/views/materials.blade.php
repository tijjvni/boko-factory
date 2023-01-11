<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Materials') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-3 gap-4 mb-5">
                <div class="p-4 bg-gray-50 rounded-xl text-gray-800">
                  <div class="font-bold text-2xl leading-none">Production</div>
                  <div class="mt-2">3 <span class="text-xs">ongoing</span></div>
                </div>
                <div class="p-4 bg-gray-50 rounded-xl text-gray-800">
                  <div class="font-bold text-2xl leading-none">Materials</div>
                  <div class="mt-2">
                    <span class="text-xs text-yellow-600">3 running low</span>
                    <i class="fa fa-cog text-xs text-gray-500 float-right"></i>
                </div>
                </div>
                <div class="p-4 bg-gray-50 rounded-xl text-gray-800">
                  <div class="font-bold text-2xl leading-none">Orders</div>
                  <div class="mt-2">14</div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div
                    class="mr-6 w-full py-5 flex-grow flex flex-col
                    bg-gray-50 rounded-lg text-gray-500 ">

                    <div class="flex flex-col items-center mt-12">
                        <i class="fa fa-tools text-4xl"></i>
                        <span class="font-bold mt-8">Production is empty</span>

                       <button type="button" class="mt-5 px-6 py-2.5 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">Create Production</button>
                    </div>
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
                First
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Last
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                Handle
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Mark
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Otto
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                @mdo
              </td>
            </tr class="bg-white border-b">
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Jacob
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Thornton
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                @fat
              </td>
            </tr>
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
              <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center">
                Larry the Bird
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                @twitter
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="flex justify-center">
  <nav aria-label="Page navigation example">
    <ul class="flex list-style-none">
      <li class="page-item disabled"><a
          class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-500 pointer-events-none focus:shadow-none"
          href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
      <li class="page-item"><a
          class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
          href="#">1</a></li>
      <li class="page-item active"><a
          class="page-link relative block py-1.5 px-3 rounded border-0 bg-indigo-600 outline-none transition-all duration-300 rounded text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
          href="#">2 <span class="visually-hidden">(current)</span></a></li>
      <li class="page-item"><a
          class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
          href="#">3</a></li>
      <li class="page-item"><a
          class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
          href="#">Next</a></li>
    </ul>
  </nav>
</div>


            </div>
        </div>
    </div>
</x-app-layout>

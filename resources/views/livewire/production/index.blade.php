<div>


    <ul class="nav nav-tabs nav-justified flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tabJustify" role="tablist">
      <li class="nav-item flex-grow text-center" role="presentation">
        <a href="#tabs-homeJustify" class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent active" id="tabs-home-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-homeJustify" role="tab" aria-controls="tabs-homeJustify" aria-selected="true">Ongoing</a>
      </li>
      <li class="nav-item flex-grow text-center" role="presentation">
        <a href="#tabs-profileJustify" class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-profile-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-profileJustify" role="tab"
          aria-controls="tabs-profileJustify" aria-selected="false">All Productions</a>
      </li>
    </ul>
    <div class="tab-content" id="tabs-tabContentJustify">
        <div class="tab-pane fade show active" id="tabs-homeJustify" role="tabpanel"
        aria-labelledby="tabs-home-tabJustify">


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
        </div>
        
        <div class="tab-pane fade" id="tabs-profileJustify" role="tabpanel" aria-labelledby="tabs-profile-tabJustify">


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
                        <tr class="bg-white border-b">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="/production/1">KNSG Order</a>
                          </td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Completed <span class="text-xs">01-01-2022</span>
                          </td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Tijjani
                          </td>
                        </tr class="bg-white border-b">
                        <tr class="bg-white border-b">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="/production/1">KNSG Order</a>
                          </td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Completed <span class="text-xs">01-01-2022</span>
                          </td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Tijjani
                          </td>
                        </tr class="bg-white border-b">
                        <tr class="bg-white border-b">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="/production/1">KNSG Order</a>
                          </td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Completed <span class="text-xs">01-01-2022</span>
                          </td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Tijjani
                          </td>
                        </tr class="bg-white border-b">
                        <tr class="bg-white border-b">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="/production/1">KNSG Order</a>
                          </td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Completed <span class="text-xs">01-01-2022</span>
                          </td>
                          <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Tijjani
                          </td>
                        </tr class="bg-white border-b">

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

</div>

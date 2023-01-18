<div class="">

    <div class="flex justify-center mb-4 gap-2">
      <div class="block p-6 rounded-lg shadow-lg bg-white flex-1">
        <h5 class="text-gray-900 text-base font-semibold">
            <i class="fa fa-cubes w-6 h-6 mr-2" > </i> Products
            <span class="">({{$products}})</span>
        </h5>
        <p class="text-gray-700 text-sm mb-4">
          All products
        </p>
        <a href="{{ route('config.production.products')}}" class=" inline-block px-6 py-2.5 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">Manage</a>
      </div>

      <div class="block p-6 rounded-lg shadow-lg bg-white flex-1">
        <h5 class="text-gray-900 text-base font-semibold">
            <i class="fa fa-cubes w-6 h-6 mr-2" > </i> Product categories
            <span class="">({{$productCategories}})</span>
        </h5>
        <p class="text-gray-700 text-sm mb-4">
          All product categories
        </p>
        <a href="{{ route('config.production.products.categories')}}" class=" inline-block px-6 py-2.5 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">Manage</a>
      </div>
    </div>

    <div class="flex justify-center mb-4 gap-2">

      <div class="block p-6 rounded-lg shadow-lg bg-white flex-1">
        <h5 class="text-gray-900 text-base font-semibold">
            <i class="fa fa-cubes w-6 h-6 mr-2" > </i> Materials
            <span class="">({{$materials}})</span>
        </h5>
        <p class="text-gray-700 text-sm mb-4">
          All Materials
        </p>
        <a href="{{ route('config.production.materials')}}" class=" inline-block px-6 py-2.5 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">Manage</a>
      </div>

      <div class="block p-6 rounded-lg shadow-lg bg-white flex-1">
        <h5 class="text-gray-900 text-base font-semibold">
            <i class="fa fa-cubes w-6 h-6 mr-2" > </i> Materials Types
            <span class="">({{$materialTypes}})</span>
        </h5>
        <p class="text-gray-700 text-sm mb-4">
          All Materials Type
        </p>
        <a href="{{ route('config.production.materials.types')}}" class=" inline-block px-6 py-2.5 bg-indigo-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-indigo-700 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-indigo-800 active:shadow-lg transition duration-150 ease-in-out">Manage</a>
      </div>
    </div>

</div>
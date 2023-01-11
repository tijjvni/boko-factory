<div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div class="grid grid-cols-2 gap-4 mb-5">
            <div class="col-span-2">
              <div class="p-4 bg-gray-100 rounded-xl">
                <div class="font-bold text-xl text-gray-800 leading-none">Hi, {{ auth()->user()->name }}</div>
                <div class="mt-5">
                  <button type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                    No new notification
                  </button>
                </div>
              </div>
            </div>
            <div class="p-4 bg-indigo-100 rounded-xl text-gray-800">
              <div class="font-bold text-2xl leading-none">Orders</div>
              <div class="mt-2">N25,000,000</div>
            </div>
            <div class="p-4 bg-indigo-100 rounded-xl text-gray-800">
              <div class="font-bold text-2xl leading-none">Products</div>
              <div class="mt-2">14</div>
            </div>
        </div>
    </div>

    <x-jet-welcome />

</div>

<div class="p-5">
    <x-jet-form-section submit="addProduct">
        <x-slot name="title">
            {{ __('Product ') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Add new product.') }}
        </x-slot>

        <x-slot name="form">

            <!-- Name -->
            <fieldset class="col-span-6 rounded shadow-md p-5 pt-2">
                <legend class="m">Product</legend>
                    <div class="grid grid-cols-2 my-2.5">
                        <div  class="col-span-1 ">
                            <x-jet-label for="name" value="{{ __('Name') }}" class="mb-2"/>
                            <x-jet-input id="name" type="text" class="col-span-1 block w-full" wire:model="name" placeholder="name" />
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>
                        <div  class="col-span-1">
                            <x-jet-label for="name" value="{{ __('Type') }}" class="mb-2"/>
                            <select class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat outline-none border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  wire:model="type">
                                <option value="0">Select product type</option>
                                @foreach($productTypes as $productType)
                                    <option value="{{ $productType->id }}">{{ $productType->name }}</option>
                                @endforeach
                            </select> 
                            <x-jet-input-error for="type" class="mt-2" />
                        </div>                            
                    </div>
                    <div class="grid grid-cols-2 my-2.5">
                        <div  class="col-span-1 ">
                            <x-jet-label for="price" value="{{ __('Price') }}" class="mb-2"/>
                            <x-jet-input id="price" type="text" class="col-span-1 block w-full" wire:model="price" placeholder="price" />
                            <x-jet-input-error for="price" class="mt-2" />
                        </div>
                    </div>



            </fieldset>


        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="production_started">
                {{ __('Product added, you\'ll be redirected now.') }}
            </x-jet-action-message> 

            <x-jet-button wire:loading.attr="disabled" wire:target="" class="bg-indigo-600">
                {{ __('Add now') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>


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
                    Product 
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                    Type
                  </th>
                </tr>
              </thead class="border-b">
              <tbody>
                @foreach($products as $key => $product)
                    <tr class="bg-white border-b">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$key + 1}}</td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        <a href="/production/1">{{$product->name}}</a>
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$product->type->name ?? 'N/A'}}
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

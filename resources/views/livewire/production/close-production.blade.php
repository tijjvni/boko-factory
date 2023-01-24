<div class="p-5">
     
    <x-jet-form-section submit="closeProduction">
        <x-slot name="title">
            {{ __('Close Production ').str_pad($production->id, 5, "0", STR_PAD_LEFT) }}
        </x-slot>

        <x-slot name="description">
            {{ __('Close production.') }}
        </x-slot>

        <x-slot name="form">
 

            <!-- Name -->
            <fieldset class="col-span-6 rounded shadow-md p-5 pt-2">
                <legend class="m">Production Output</legend>
                <a class="text-indigo-600 text-xs" href="{{ route('config.production.products') }}" target="_blank">Add product</a>

                    @foreach($productInputs as $key => $productInput)
                        <div class="grid grid-cols-2 my-5">
                            <div  class="col-span-1">
                                <x-jet-label for="name" value="{{ __('Product') }}" class="mb-2"/>
                                <select class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat outline-none border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  wire:model="products.{{$key}}.product">
                                    <option value="0">Select product</option>
                                    @foreach($productsOptions as $productsOption)
                                        <option value="{{ $productsOption->id }}">{{ $productsOption->name }}</option>
                                    @endforeach
                                </select> 
                                <x-jet-input-error for="products.{{$key}}.product" class="mt-2" />
                            </div>                            
                            <div  class="col-span-1 ">
                                <x-jet-label for="name" value="{{ __('Quantity') }}" class="mb-2"/>
                                <x-jet-input id="name" type="number" class="col-span-1 block w-full" wire:model="products.{{$key}}.qty" placeholder="1" />
                                <x-jet-input-error for="products.{{$key}}.qty" class="mt-2" />
                            </div>
                        </div>
                    @endforeach

                    <div class="flex space-x-2 my-2">
                      <button type="button" class="inline-block px-6 py-2.5 text-gray-600 shadow font-medium text-xs leading-tight uppercase rounded shadow-lg" wire:click="addNewProductInput()">
                        <i class="fa fa-plus"></i>
                        </button>
                    </div>
            </fieldset>

        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="production_started">
                {{ __('Production started, you\'ll be redirected now.') }}
            </x-jet-action-message> 

            <x-jet-button wire:loading.attr="disabled" wire:target="" class="bg-indigo-600">
                {{ __('Close production') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>




</div>

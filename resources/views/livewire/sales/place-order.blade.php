<div class="p-5">
     
    <x-jet-form-section submit="placeOrder">
        <x-slot name="title">
            {{ __('Place Order ') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Placing an order.') }}
        </x-slot>

        <x-slot name="form">
 

            <!-- Name -->
            <fieldset class="col-span-6 rounded shadow-md p-5 pt-2">
                <legend class="m">Order products</legend>

                    <div class="grid grid-cols-2 my-5">
                        <div  class="col-span-2">
                            <div class="w-full form-check">
                                <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-indigo-600 checked:border-indigo-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" wire:model="customerCheck" checked/>
                                <label class="form-check-label inline-block text-gray-600" for="flexCheckChecked">
                                N/A
                                </label>
                            </div>

                            @if(!$customerCheck)
                                <div  class="w-full ">
                                    <x-jet-label for="time" value="{{ __('Customer') }}" class="mb-2"/>
                                    <select class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat outline-none border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  wire:model="customer">
                                        <option value="0">Select customer</option>
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->person->first_name.' '.$customer->person->last_name }}</option>
                                        @endforeach
                                    </select>                                     
                                    <x-jet-input-error for="customer" class="mt-2" />
                                    <a class="text-indigo-600 text-xs" href="{{ route('config.users.add.customers') }}" target="_blank">Add customer</a>
                                </div>  
                            @endif

                        </div>
                    </div>   

                    @foreach($productsInputs as $key => $productsInput)
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
                                <a class="text-indigo-600 text-xs" href="{{ route('config.production.products') }}" target="_blank">Add product</a>
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
            <x-jet-action-message class="mr-3" on="order_placed">
                {{ __('Order Placed, you\'ll be redirected now.') }}
            </x-jet-action-message> 

            <x-jet-button wire:loading.attr="disabled" wire:target="" class="bg-indigo-600">
                {{ __('Place Order') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>


</div>

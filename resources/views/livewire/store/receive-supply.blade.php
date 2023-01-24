<div class="p-5">
     
    <x-jet-form-section submit="receiveSupply">
        <x-slot name="title">
            {{ __('Receive Supply ') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Receiving supply.') }}
        </x-slot>

        <x-slot name="form">
 

            <!-- Name -->
            <fieldset class="col-span-6 rounded shadow-md p-5 pt-2">
                <legend class="m">Supply Material</legend>

                    @foreach($suppliesInputs as $key => $suppliesInput)
                        <div class="grid grid-cols-2 my-5">
                            <div  class="col-span-1">
                                <x-jet-label for="name" value="{{ __('Material') }}" class="mb-2"/>
                                <select class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat outline-none border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  wire:model="materials.{{$key}}.material">
                                    <option value="0">Select material</option>
                                    @foreach($materialsOptions as $materialsOption)
                                        <option value="{{ $materialsOption->id }}">{{ $materialsOption->name }}</option>
                                    @endforeach
                                </select> 
                                <x-jet-input-error for="materials.{{$key}}.material" class="mt-2" />
                                <a class="text-indigo-600 text-xs" href="{{ route('config.production.materials') }}" target="_blank">Add material</a>
                            </div>                            
                            <div  class="col-span-1 ">
                                <x-jet-label for="name" value="{{ __('Quantity') }}" class="mb-2"/>
                                <x-jet-input id="name" type="number" class="col-span-1 block w-full" wire:model="materials.{{$key}}.qty" placeholder="1" />
                                <x-jet-input-error for="materials.{{$key}}.qty" class="mt-2" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 my-5">
                            <div  class="col-span-2">
                                <div class="w-full form-check">
                                    <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-indigo-600 checked:border-indigo-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" wire:model="materials.{{$key}}.supplierCheck" checked/>
                                    <label class="form-check-label inline-block text-gray-600" for="flexCheckChecked">
                                    N/A
                                    </label>
                                </div>

                                <div  class="w-full ">
                                    <x-jet-label for="time" value="{{ __('Supplier') }}" class="mb-2"/>
                                    <select class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat outline-none border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  wire:model="materials.{{$key}}.supplier">
                                        <option value="0">Select supplier</option>
                                        @foreach($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}">{{ $supplier->person->first_name.' '.$supplier->person->last_name }}</option>
                                        @endforeach
                                    </select>                                     
                                    <x-jet-input-error for="materials.{{$key}}.supplier" class="mt-2" />
                                    <a class="text-indigo-600 text-xs" href="{{ route('config.users.add.suppliers') }}" target="_blank">Add supplier</a>

                                </div>  
                            </div>
                        </div>                        


                    @endforeach

                    <div class="flex space-x-2 my-2">
                      <button type="button" class="inline-block px-6 py-2.5 text-gray-600 shadow font-medium text-xs leading-tight uppercase rounded shadow-lg" wire:click="addNewSupplyInput()">
                        <i class="fa fa-plus"></i>
                        </button>
                    </div>
            </fieldset>

        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="supply_received">
                {{ __('Supply received, you\'ll be redirected now.') }}
            </x-jet-action-message> 

            <x-jet-button wire:loading.attr="disabled" wire:target="" class="bg-indigo-600">
                {{ __('Receive supply') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>




</div>

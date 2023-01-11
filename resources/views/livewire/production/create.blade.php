<div class="p-5">
    <x-jet-form-section submit="startProduction">
        <x-slot name="title">
            {{ __('Create Production') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Start new production.') }}
        </x-slot>

        <x-slot name="form">

            <!-- Name -->
            <fieldset class="col-span-6 rounded shadow-md p-5 pt-2">
                <legend class="m">Production Materials</legend>

                    @foreach($materialInputs as $key => $materialInput)
                        <div class="grid grid-cols-2 gap-2 my-5">
                            <div  class="col-span-1 ">
                                <x-jet-label for="name" value="{{ __('Materials') }}" class="mb-2"/>
                                <select class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat outline-none border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  wire:model="materials.{{$key}}.name">
                                    <option value="1">Material 1</option>
                                    <option value="2">Material 2</option>
                                    <option value="3">Material 3</option>
                                </select> 
                                <x-jet-input-error for="materials.{{$key}}.name" class="mt-2" />
                            </div>                            
                            <div  class="col-span-1 ">
                                <x-jet-label for="name" value="{{ __('Quantity') }}" class="mb-2"/>
                                <x-jet-input id="name" type="number" class="col-span-1 block w-full" wire:model="materials.{{$key}}.qty" placeholder="1" />
                                <x-jet-input-error for="materials.{{$key}}.qty" class="mt-2" />
                            </div>
                        </div>
                    @endforeach


                    <div class="flex space-x-2 my-2">
                      <button type="button" class="inline-block px-6 py-2.5 text-gray-600 shadow font-medium text-xs leading-tight uppercase rounded shadow-lg">
                        <i class="fa fa-plus"></i>
                        </button>
                    </div>

            </fieldset>

            <div class="col-span-6 ">
                <div class="w-full form-check">
                  <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-indigo-600 checked:border-indigo-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" wire:model="productionStarts" checked/>
                  <label class="form-check-label inline-block text-gray-600" for="flexCheckChecked">
                    Production starts now
                  </label>
                </div>
                @if(!$productionStarts)
                    <div  class="w-full ">
                        <x-jet-label for="name" value="{{ __('Time') }}" class="mb-2"/>
                        <x-jet-input id="name" type="datetime-local" class="col-span-1 block w-full" wire:model="start_time" placeholder="1" />
                        <x-jet-input-error for="start_time" class="mt-2" />
                    </div>  
                @endif              
            </div>            

        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="production_started">
                {{ __('Production started, you\'ll be redirected now.') }}
            </x-jet-action-message> 

            <x-jet-button wire:loading.attr="disabled" wire:target="" class="bg-indigo-600">
                {{ __('Start production') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>




</div>

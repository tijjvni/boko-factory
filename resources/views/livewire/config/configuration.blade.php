<div class="p-5">
    <x-jet-form-section submit="addMaterial">
        <x-slot name="title">
            {{ __('Configuration ') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Manage system configuration.') }}
        </x-slot>

        <x-slot name="form">

            <!-- Name -->
            <fieldset class="col-span-6 rounded shadow-md p-5 pt-2">
                <legend class="m">Config</legend>
                    <div class="grid grid-cols-2 my-5">
                        <div  class="col-span-1 ">
                            <x-jet-label for="name" value="{{ __('Company name') }}" class="mb-2"/>
                            <x-jet-input id="name" type="text" class="col-span-1 block w-full" wire:model="name" placeholder="name" />
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>
                        <div  class="col-span-1">
                            <x-jet-label for="name" value="{{ __('Company Logo') }}" class="mb-2"/>
                            <x-jet-input id="name" type="file" class="col-span-1 block w-full" wire:model="file" placeholder="file" />
                            <x-jet-input-error for="file" class="mt-2" />
                        </div>                            
                    </div>



            </fieldset>


        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="production_started">
                {{ __('Material added, you\'ll be redirected now.') }}
            </x-jet-action-message> 

            <x-jet-button wire:loading.attr="disabled" wire:target="" class="bg-indigo-600">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>


    
</div>

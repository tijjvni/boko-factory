<div class="p-5">

    <nav class="bg-grey-light rounded-md w-full mb-5 text-sm">
        <ol class="list-reset flex">
            <li><a href="{{ route('dashboard') }}" class="text-indigo-600 hover:text-indigo-700">Home</a></li>
            <li><span class="fa fa-chevron-right text-gray-500 mx-2"></span></li>
            <li><a href="{{ route('production') }}" class="text-indigo-600 hover:text-indigo-700">Users Management</a></li>
            <li><a href="{{ route('production') }}" class="text-indigo-600 hover:text-indigo-700">Customers</a></li>
            <li><span class="fa fa-chevron-right text-gray-500 mx-2"></span></li>
            <li class="text-gray-500">Add </li>
        </ol>
    </nav>

    <x-jet-form-section submit="addCustomer">
        <x-slot name="title">
            {{ __('Customers') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Add new customer.') }}
        </x-slot>

        <x-slot name="form">

            <!-- Name -->
            <fieldset class="col-span-6 rounded shadow-md p-5 pt-2">
                <legend class="m">Customer</legend>

                    <div class="grid grid-cols-2 my-5">
                        <div  class="col-span-1 ">                          
                            <x-jet-label for="firstname" value="{{ __('Firstname') }}" class="mb-2"/>
                            <x-jet-input id="firstname" type="text" class="col-span-1 block w-full" wire:model="firstname" placeholder="firstname" />
                            <x-jet-input-error for="firstname" class="mt-2" />
                        </div>                        
                        <div  class="col-span-1 ">                 
                            <x-jet-label for="lastname" value="{{ __('Lastname') }}" class="mb-2"/>
                            <x-jet-input id="lastname" type="text" class="col-span-1 block w-full" wire:model="lastname" placeholder="lastname" />
                            <x-jet-input-error for="lastname" class="mt-2" />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 my-5">
                        <div  class="col-span-1 ">                  
                            <x-jet-label for="email" value="{{ __('Email') }}" class="mb-2"/>
                            <x-jet-input id="email" type="text" class="col-span-1 block w-full" wire:model="email" placeholder="email" />
                            <x-jet-input-error for="email" class="mt-2" />
                        </div>                        
                        <div  class="col-span-1 ">                 
                            <x-jet-label for="phone" value="{{ __('Phone') }}" class="mb-2"/>
                            <x-jet-input id="phone" type="text" class="col-span-1 block w-full" wire:model="phone" placeholder="phone" />
                            <x-jet-input-error for="phone" class="mt-2" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 my-5">
                        <div  class="col-span-1 "> 
                            <x-jet-label for="address" value="{{ __('Address') }}" class="mb-2"/>
                            <textarea id="address" type="text" class="col-span-1 block w-full" wire:model="address" placeholder="address"></textarea>
                            <x-jet-input-error for="address" class="mt-2" />
                        </div>
                    </div>


            </fieldset>


        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="production_started">
                {{ __('Customer added, you\'ll be redirected now.') }}
            </x-jet-action-message> 

            <x-jet-button wire:loading.attr="disabled" wire:target="" class="bg-indigo-600">
                {{ __('Add now') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>


</div>

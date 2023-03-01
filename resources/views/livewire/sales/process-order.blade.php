<div class="p-5">

    <x-jet-action-section>
        <x-slot name="title">
            {{ __('Process Order: ').str_pad($order->id, 5, "0", STR_PAD_LEFT) }}
        </x-slot>
        <x-slot name="description">
            {{ __('Take an to process order.') }}
        </x-slot>

        <x-slot name="content">
            <x-jet-banner />
            <div class="mt-5 flex lg:mt-2 justify-between w-full">

                @if($productsAvailable)
                    <span class="mx-1" wire:click="requestOrder" >
                        <span wire:loading.remove wire:target="requestOrder">
                            <x-button value="Print Loading Order"/>       
                        </span>
                        <span wire:loading wire:target="requestOrder">  
                            <x-button value="processing..."/>
                        </span>
                    </span>
                @else
                    <span class="mx-1" wire:click="requestOrder" >
                        <span wire:loading.remove wire:target="requestOrder">
                            <x-button value="Request products"/>       
                        </span>
                        <span wire:loading wire:target="requestOrder">  
                            <x-button value="processing..."/>
                        </span>
                    </span>
                @endif

                @if($requested)
                    <span wire:click="printLoadingOrder">

                        <span wire:loading.remove wire:target="requestOrder">
                            <x-button-outline value="Print Request"/>                    
                        </span>
                        <span wire:loading wire:target="requestOrder">  
                            <x-button-outline value="processing..."/>
                        </span>

                    </span>
                @endif

                <button type="button" class="mx-1 inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" id="dropdownMenuButton1d" data-bs-toggle="dropdown" aria-expanded="false">                      
                    Cancel Order
                </button>
            </div>

        </x-slot>

    </x-jet-action-section>


</div>

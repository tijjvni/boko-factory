<div>
    @switch(request()->url())
        @case (false)

        @break
        @default
            <div class="mb-5">
                <livewire:config.users.user-roles />        
            </div>
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex-grow">
                    <livewire:config.users.suppliers />                    
                </div>
                <div class="flex-grow">
                    <livewire:config.users.customers />                    
                </div>
            </div>
    @endswitch
</div>

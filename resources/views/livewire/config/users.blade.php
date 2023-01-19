<div>

    @switch(request()->url())
        @case(route('config.users.customers'))
              <livewire:config.users.all-customers />                      
            @break
        @case(route('config.users.suppliers'))
              <livewire:config.users.all-suppliers />                      
            @break
        @default
            <div class="mb-5">
                <livewire:config.users.user-roles />        
            </div>

            <div class="flex flex-row gap-5">
                <div class="flex-grow">
                    <livewire:config.users.suppliers />                    
                </div>
                <div class="flex-grow">
                    <livewire:config.users.customers />                    
                </div>
            </div>
    @endswitch

</div>

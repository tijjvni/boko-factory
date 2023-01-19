<div >

            @switch(request()->url())
                @case(route('config.production.products'))
                      <livewire:config.production.product />                      
                    @break
                @case(route('config.production.products.categories'))
                      <livewire:config.production.product-categories />                      
                   @break
                @case(route('config.production.materials'))
                      <livewire:config.production.material />                      
                   @break
                @case(route('config.production.materials.types'))
                      <livewire:config.production.material-type />                      
                   @break
                @case(route('config.users.customers'))
                      <livewire:config.users.all-customers />                      
                    @break
                @case(route('config.users.suppliers'))
                      <livewire:config.users.all-suppliers />                      
                    @break
                @case(route('config.users.add.customers'))
                      <livewire:config.users.add-customer />                      
                    @break                   
                @default
                

                    <div class="flex flex-wrap" id="tabs-id">
                      <div class="w-full">
                        <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row ">
                          <li class="-mb-px mr-2 last:mr-0 flex-1 text-center cursor-pointer">
                            <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-gray-600 bg-white hover:bg-gray-300 active:bg-gray-200" onclick="changeAtiveTab(event,'tab-roles')">
                              <i class="fas fa-users text-base mr-1"></i>  Users Management
                            </a>
                          </li>
                          <li class="-mb-px mr-2 last:mr-0 flex-1 text-center cursor-pointer">
                          <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-gray-600 bg-white focus:bg-gray-800 active:bg-gray-200" onclick="changeAtiveTab(event,'tab-users')">
                              <i class="fas fa-tools text-base mr-1"></i> Production Management
                            </a>
                          </li>
                          <li class="-mb-px mr-2 last:mr-0 flex-1 text-center cursor-pointer">
                          <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-gray-600 bg-white focus:bg-gray-800 active:bg-gray-200" onclick="changeAtiveTab(event,'tab-config')">
                              <i class="fas fa-cog text-base mr-1"></i>  Configurations
                            </a>
                          </li>
                        </ul>
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-sm rounded">
                          <div class="px-4 py-5 flex-auto border border-gray-100 rounded-md">
                            <div class="tab-content tab-space">
                              <div class="block" id="tab-roles">
                                  <livewire:config.users-management />                      
                              </div>
                              <div class="hidden" id="tab-users">
                                  <livewire:config.production-management />                      
                              </div>
                              <div class="hidden" id="tab-config">
                                  <livewire:config.configuration />                      
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">
                      function changeAtiveTab(event,tabID){
                        let element = event.target;
                        while(element.nodeName !== "A"){
                          element = element.parentNode;
                        }
                        ulElement = element.parentNode.parentNode;
                        aElements = ulElement.querySelectorAll("li > a");
                        tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
                        for(let i = 0 ; i < aElements.length; i++){
                          aElements[i].classList.remove("text-gray-900");
                          aElements[i].classList.remove("bg-gray-200");
                          aElements[i].classList.add("text-blueGray-600");
                          aElements[i].classList.add("bg-white");
                          tabContents[i].classList.add("hidden");
                          tabContents[i].classList.remove("block");
                        }
                        element.classList.remove("text-blueGray-600");
                        element.classList.remove("bg-white");
                        element.classList.add("text-gray-900");
                        element.classList.add("bg-gray-200");
                        document.getElementById(tabID).classList.remove("hidden");
                        document.getElementById(tabID).classList.add("block");
                      }
                    </script>                                    
           @endswitch

</div>
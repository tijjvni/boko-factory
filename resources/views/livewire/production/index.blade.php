<div>

   <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-5">
        <x-dashboard-stat-card title="Production" value="{{$ongoingProduction}}" info="ongoing">
            <i class="fa fa-tools"></i>
        </x-dashboard-stat-card>
        <x-dashboard-stat-card title="Materials" value="{{$materialsRunningLow}}" info="running low" class="bg-gray-1000">
            <i class="fa fa-list"></i>
        </x-dashboard-stat-card>
        <x-dashboard-stat-card title="Orders" value="{{$orders}}" info="pending">
            <i class="fa fa-archive"></i>
        </x-dashboard-stat-card>
    </div>  

    <ul class="nav nav-tabs nav-justified flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4" id="tabs-tabJustify" role="tablist">
      <li class="nav-item flex-grow text-center" role="presentation">
        <a href="#tabs-homeJustify" class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent active" id="tabs-home-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-homeJustify" role="tab" aria-controls="tabs-homeJustify" aria-selected="true">Ongoing</a>
      </li>
      <li class="nav-item flex-grow text-center" role="presentation">
        <a href="#tabs-profileJustify" class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent" id="tabs-profile-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-profileJustify" role="tab"
          aria-controls="tabs-profileJustify" aria-selected="false">All Productions</a>
      </li>
    </ul>
    <div class="tab-content" id="tabs-tabContentJustify">
        <div class="tab-pane fade show active" id="tabs-homeJustify" role="tabpanel"
        aria-labelledby="tabs-home-tabJustify">
            <livewire:production.ongoing-productions/>
        </div>
        
        <div class="tab-pane fade" id="tabs-profileJustify" role="tabpanel" aria-labelledby="tabs-profile-tabJustify">
            <livewire:production.all-productions/>
        </div>
    </div>

</div>

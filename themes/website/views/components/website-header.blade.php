<header>
    <div>
      <img class="h-32 w-full object-cover lg:h-48" src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:gap-x-5">
        <div class="flex mx-auto justify-center">
            <a href="{{route('website.home', data_get(websiteConfig(),'slug'))}}">
                <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32 bg-pgray-100" src="{{data_get(websiteConfig(),'logo')}}" alt="{{data_get(websiteConfig(),'name')}}">
            </a>
        </div>
        <div class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:gap-x-6 sm:pb-1">
          <div class="xsm:hidden    mt-6 min-w-0 flex-1 text-center sm:text-start">
            <h1 class="text-2xl font-bold text-gray-900 truncate">
                <a href="{{route('website.home', data_get(websiteConfig(),'slug'))}}">
                    {{data_get(websiteConfig(),'name')}} <small class="ms-2 text-sm opacity-50">{{data_get(websiteConfig(), 'meta.description')}}</small>
                </a></h1>
          </div>
          <div class="mt-0 md:mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:gap-x-4">
            <x-social-links-icons />
          </div>
        </div>
      </div>
    </div>
</header> 
  
<livewire:website.page-list />
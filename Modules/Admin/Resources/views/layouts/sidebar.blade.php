<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


    {{-- sidebar content --}}
    <div class="flex flex-col">

        {{-- sidebar toggle --}}
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        {{-- end sidebar toggle --}}

        {{-- <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">tabels</p> --}}

        {{-- link --}}
        <a href="{{ route('admin.profile.index') }}"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-envelope-open-text text-xs mr-2"></i>
            Admin Credentials
        </a>
        {{-- link --}}
        {{-- link --}}
        <a href="{{ route('admin.settings.index') }}"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-envelope-open-text text-xs mr-2"></i>
            Site Settings
        </a>
        {{-- link --}}
        <a href="{{ route('admin.team.members.index') }}"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-envelope-open-text text-xs mr-2"></i>
            Team Members
        </a>
        {{-- end link --}}
        {{-- link --}}
        <a href="{{ route('admin.texts.index') }}"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-envelope-open-text text-xs mr-2"></i>
            Site Texts
        </a>
        {{-- end link --}}
        {{-- link --}}
        <a href="{{ route('admin.images.index') }}"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-envelope-open-text text-xs mr-2"></i>
            Site Images
        </a>
        {{-- end link --}}
    </div>
    {{-- end sidebar content --}}

</div>

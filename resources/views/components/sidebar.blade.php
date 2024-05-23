<div class="flex h-screen bg-gray-50 dark:bg-gray-900">
    <style>
        .activeNav {
            background-color: #F9FAFB;
            border-top-left-radius: 1rem;
            border-bottom-left-radius: 1rem;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .sidebar-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .sidebar-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
    <aside class="z-20 w-64 overflow-y-hidden bg-gray-200  dark:bg-gray-800 flex-shrink-0 asideShowHide"
        id="asideShowHide">
        <div class=" text-gray-500 dark:text-gray-400 ">
            <div class="pb-2 pt-1 activeNav">
                <h1 class="text-black text-center text-xl pt-3 pb-3" id="titleLong">Basic Common Dashboard</h1>
                <h1 class="text-black text-center text-xl hidden pt-3 pb-4" id="titleShort">B.C.D</h1>
            </div>
            <ul class="h-[90vh] overflow-y-hidden hover:overflow-y-auto aside sidebar-scrollbar">

                <br>
                {{-- Dashboard --}}
                <li class="" id="dashboardActive">
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" id="dashboardIcon">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z">
                            </path>
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z">
                            </path>
                        </svg>
                        <span class="ml-3" id="dashboardText">Dashboard</span>
                    </a>
                </li>
                {{-- Dashboard_End --}}
                <br>
            </ul>

        </div>
        <input type="hidden" value="{{ $name }}" id="sideActive">
    </aside>
</div>
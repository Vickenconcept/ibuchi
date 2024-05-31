<aside id="default-sidebar"
    class="fixed bg-white top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto mt-[70px]">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') || request()->routeIs('services.create') || request()->routeIs('services.edit') ? 'inline-flex items-center px-2 pt-1 border-b-2 border-indigo-400 font-normal text-gray-900
            focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out w-full' : 'inline-flex items-center px-2 pt-1 font-normal text-gray-900
            focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out w-full' }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>

        </ul>
    </div>
</aside>

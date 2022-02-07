<nav class="relative flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6" aria-label="Global">
    <div class="flex items-center flex-1">
        <div class="flex items-center justify-between w-full md:w-auto">
            <a href="#">
                <span class="sr-only">Len Woodward</span>
                <span class="p-2 ml-3 text-xl font-extrabold text-blue-100 bg-blue-600 rounded-lg">LW</span>
            </a>
            {{-- md:hidden download resume --}}
            <div class="flex items-center -mr-2 md:hidden">
                <button @click="navOpen = true" type="button"
                    class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    id="main-menu" aria-haspopup="true">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden md:block md:ml-10 md:space-x-10">
            <a href="#who" class="font-medium text-gray-500 hover:text-gray-900">Who am I?</a>
            <a href="#what" class="font-medium text-gray-500 hover:text-gray-900">What am I good at?</a>
            {{-- <a href="#why" class="font-medium text-gray-500 hover:text-gray-900">Why Tighten?</a> --}}
            <a href="#how" class="font-medium text-gray-500 hover:text-gray-900">How to reach me</a>
            <a href="https://github.com/ProjektGopher/LenWoodward_com" class="font-medium text-gray-500 hover:text-gray-900">This Repo</a>
            {{-- Download Resume --}}
        </div>
    </div>
</nav>

<!--
    Mobile menu, show/hide based on menu open state.

    Entering: "duration-150 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
<div x-show="navOpen" @click.away="navOpen = false"
    class="absolute z-10 inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden">
    <div class="overflow-hidden bg-white rounded-lg shadow-md ring-1 ring-black ring-opacity-5">
        <div class="flex items-center justify-between px-5 pt-4">
            <div>
                <span class="p-2 text-xl font-extrabold text-blue-100 bg-blue-600 rounded-lg">LW</span>
            </div>
            <div class="-mr-2">
                <button @click="navOpen = false" type="button"
                    class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
            <div class="px-2 pt-2 pb-3 space-y-1" role="none">
                <a href="#who"
                    class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50"
                    role="menuitem">Who am I?</a>
                <a href="#what"
                    class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50"
                    role="menuitem">What am I good at?</a>
                {{-- <a href="#why"
                    class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50"
                    role="menuitem">Why Tighten?</a> --}}
                <a href="#how"
                    class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50"
                    role="menuitem">How to reach me</a>
                <a href="https://github.com/ProjektGopher/LenWoodward_com"
                    class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:text-gray-900 hover:bg-gray-50"
                    role="menuitem">This Repo</a>
            </div>
        </div>
    </div>
</div>
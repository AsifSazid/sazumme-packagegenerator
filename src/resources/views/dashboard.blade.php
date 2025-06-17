<x-spg-app-master>
    <x-slot name="header">
        <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
            <h1 class="text-2xl font-semibold">{{ __('Dashboard') }}</h1>
        </div>
    </x-slot>

    <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-2">

        <!-- My Ebook card -->
        <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
            <div>
                <h6
                    class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                    Total Packages
                </h6>
                <span class="text-xl font-semibold">1</span>
            </div>
            <div>
                <span>
                    <svg class="w-12 h-12 text-gray-300 dark:text-primary-dark" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">

                        <!-- Outer circle -->
                        <circle cx="12" cy="12" r="9" stroke-width="2" stroke="currentColor"
                            fill="none" />

                        <!-- Checkmark -->
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12l2.5 2.5L16 9" />
                    </svg>

                </span>
            </div>
        </div>
    </div>
</x-spg-app-master>


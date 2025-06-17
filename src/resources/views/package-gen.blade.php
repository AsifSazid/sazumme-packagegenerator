<x-spg-app-master>
    <x-slot name="header">
        <div class="flex items-center justify-between px-4 py-4 border-b lg:py-6 dark:border-primary-darker">
            <h1 class="text-2xl font-semibold">{{ __('Package Generator') }}</h1>
        </div>
    </x-slot>

    <div class="grid grid-cols-1 gap-8 p-4">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-lg bg-white p-6 shadow-md">

                <form action="{{ route('package.generate') }}" method="POST" class="space-y-6 mx-4 px-4">
                    @csrf

                    <div>
                        <label for="vendor" class="block text-sm font-medium text-gray-700">Vendor Name</label>
                        <input type="text" name="vendor" id="vendor"
                            class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder=" e.g., Sazumme" required>
                    </div>

                    <div>
                        <label for="package" class="block text-sm font-medium text-gray-700">Package Name</label>
                        <input type="text" name="package" id="package"
                            class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder=" e.g., Publication" required>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="5"
                            class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder=" Short description of the package..." required></textarea>
                    </div>

                    <div>
                        <label for="author_name" class="block text-sm font-medium text-gray-700">Author Name</label>
                        <input type="text" name="author_name" id="author_name"
                            class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            required>
                    </div>

                    <div>
                        <label for="author_email" class="block text-sm font-medium text-gray-700">Author
                            Email</label>
                        <input type="email" name="author_email" id="author_email"
                            class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            required>
                    </div>

                    <div>
                        <label for="author_website" class="block text-sm font-medium text-gray-700">Author
                            Website</label>
                        <input type="text" name="author_website" id="author_website"
                            class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder=" https://www.example.com">
                    </div>

                    <div class="p-4">
                        <button type="submit"
                            class="flex px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark">
                            Generate & Download Package
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-spg-app-master>

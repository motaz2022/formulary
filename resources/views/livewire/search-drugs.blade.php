<div>
    <div id="alert-2"
    class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
    role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
        viewBox="0 0 20 20">
        <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Info</span>
    <div class="ml-3 text-sm font-medium">
        To report a medication safety issue <a href="{{ route('report') }}"
            class="font-semibold underline hover:no-underline">Click Here</a>
    </div>
    <button type="button"
        class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
        data-dismiss-target="#alert-2" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>
    <div class=" text-center">
        <h1 class="mb-2 text-md">Search the ERMC Drug
            Formulary,
            effective from
            <strong>DEC, 2022</strong>
            using generic or brand name.
        </h1>
    </div>
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <input wire:model.debounce.300ms="search" type="search" id="default-search"
            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Search Generic, Brand..." required>
    </div>

    {{-- 0 searh --}}
    <div wire:loading.class.long="opacity-50">

        @forelse ($drugs as $drug)
            <div
                class="block p-2 mt-1 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex">
                    <div class=" w-8/12 mt-1">
                        <small class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">{{ $drug->brandName }}</small>
                        {{-- <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $drug->brandName }}</h5> --}}
                    </div>
                    <div class="text-end w-4/12">
                        <a href="/drug/{{ $drug->id }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            More
                        </a>
                    </div>
                </div>

            </div>

        @empty
        <div
                class="p-12 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mt-2">
                <p class="text-center text-red-600 text-xl mx-auto">
                    <span>
                        <span style="font-size: 36px"
                            class="material-symbols-outlined relative top-2.5 left-0 text-red-600 mr-2">search</span>
                        No Search Results Found
                    </span>
                </p>
            </div>
        @endforelse


    </div>
    {{-- END 0 searh --}}

    {{-- First searh --}}
    {{-- <div wire:loading.class.long="opacity-50">
        <div class="relative overflow-x-auto shadow-lg sm:rounded-lg border my-2 rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody>
                    @forelse ($drugs as $drug)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 shadow-4xl">
                            <th scope="row"
                                class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $drug->brandName }}
                            </th>
                            <td class="px-1 py-2">
                                <a href="/drug/{{ $drug->id }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                    More
                                </a>
                            </td>
                    </tr> @empty
                        <td
                            class="p-12 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mt-2">
                            <p class="text-center text-red-600 text-xl mx-auto">
                                <span>
                                    <span style="font-size: 36px"
                                        class="material-symbols-outlined relative top-2.5 left-0 text-red-600 mr-2">search</span>
                                    No Search Results Found
                                </span>
                            </p>
                        </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div> --}}
    {{-- END First searh --}} {{-- 2nd searh --}}
    {{-- <div wire:loading.class.long="opacity-50">
        @forelse ($drugs as $drug)
            <div
                class="max-w-4xl p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mt-2">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $drug->brandName }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $drug->genericName }}</p>
                <div class=" columns-2">
                    <div class=" inline-flex">
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <span
                                class="material-symbols-outlined relative top-1.5 left-0 text-green-600">payments</span>
                            {{ $drug->price }} EGP
                        </p>
                    </div>
                    <div class="text-end">
                        <a href="/drug/{{ $drug->id }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            More Info
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div
                class="p-12 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mt-2">
                <p class="text-center text-red-600 text-xl mx-auto">
                    <span>
                        <span style="font-size: 36px"
                            class="material-symbols-outlined relative top-2.5 left-0 text-red-600 mr-2">search</span>
                        No Search Results Found
                    </span>
                </p>
            </div>
        @endforelse
    </div> --}}
    {{-- END 2nd searh --}} {{-- pagination --}}
    <div class="mt-2">
        {{ $drugs->links() }}
    </div>
    {{-- END pagination --}}
</div>

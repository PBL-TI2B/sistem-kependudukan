@props(['route'])

<div class="border border-gray-200 rounded-lg divide-y divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
    <div class="flex items-center justify-between">
    <div class="py-3 px-4">
        <h2 class="text-xl font-semibold dark:text-white mb-2">Manajemen {{ ucfirst($route) }}</h2>
        <form action="{{ route("admin.$route.search") }}" method="GET" class="relative max-w-md">
            <label class="sr-only">Cari data {{ $route }}</label>
            <input type="text" name="search" id="search" class="py-1.5 sm:py-2 px-3 block w-full border border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:z-10  dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 outline-none" placeholder="Cari {{ $route }}">
            <div class="absolute inset-y-0 end-0 flex items-center pe-3">
              <button type="submit">
                <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </svg>
            </button>
            </div>
        </form>
    </div>
    <div class="px-8">
        <a href="{{ route("admin.$route.create") }}" class="bg-emerald-700 text-white p-2 px-4 rounded-md flex gap-1 items-center">
          <i class="ph ph-plus-circle"></i>
            Tambah
        </a>
    </div>
</div>
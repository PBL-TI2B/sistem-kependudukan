@props(['title', 'subtitle', 'link', 'linkText'])

<div class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl p-4 md:p-5 dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <div class="flex items-center justify-between">
        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
        Jumlah Penduduk
        </h3>
        <div class="bg-teal-200 rounded-full p-2 px-3">
            <i class="ph ph-user"></i>
        </div>
    </div>
   
    <div class="flex items-center gap-2">
        <i class="ph ph-trend-up text-lg dark:text-white"></i>
        <h2 class="text-3xl font-bold dark:text-white">90</h2>
    </div>
    <p class="mt-2 text-gray-500 dark:text-neutral-400">
    Naik 12% dari bulan lalu
    </p>
    {{-- <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-hidden focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-600 dark:focus:text-blue-600" href="#">
    Lihat data lengkap
    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
    </svg>
    </a> --}}
</div>  
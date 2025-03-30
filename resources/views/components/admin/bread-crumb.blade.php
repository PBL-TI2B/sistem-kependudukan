@props(['title', 'breadcrumbs'=>['label'=>'', 'route'=>'']])

<div class="md:flex md:justify-between mb-2 md:mb-0">
    <h2 class="text-xl font-bold dark:text-white mb-2">{{ $title }}</h2>
    <ol class="flex items-center whitespace-nowrap">
        @foreach ($breadcrumbs as $breadcrumb)
            @if(!$loop->last)
                <li class="inline-flex items-center">
                    <a href="{{ route($breadcrumb['route']) }}" class="flex items-center text-[.8rem] sm:text-sm text-gray-500 hover:text-neutral-600 focus:outline-hidden focus:text-neutral-600 dark:text-neutral-400 dark:hover:text-gray-200 dark:focus:text-gray-200">
                        {{ $breadcrumb['label'] }}
                    </a>
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                </li>
            @else
                <li class="inline-flex items-center text-[.8rem] sm:text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
                    {{ $breadcrumb['label'] }}
                </li>
            @endif
        @endforeach
      </ol>
</div>

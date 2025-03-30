@props(['label', 'name', 'type' => 'text', 'value' => '', 'placeholder' => ''])

@php
    $errorMessage = $errors->first($name);
@endphp

<div class="max-w-lg">
    <label for="{{ $name }}" class="block text-sm font-medium mb-2 dark:text-white">{{ $label }}</label>

    @if($type === 'file')
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" 
            class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm 
            focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 
            disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 
            dark:text-neutral-400 file:bg-gray-50 file:border-0 file:me-4 file:py-3 
            file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400"
            value="{{ old($name, $value) }}" accept="image/*"
            >
    @else
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" 
            class="py-2.5 sm:py-3 px-4 block w-full border border-gray-200 rounded-lg sm:text-sm 
            focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none 
            dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 
            dark:focus:ring-neutral-600 dark:text-white" placeholder="{{ $placeholder }}" value="{{ $value }}">
    @endif

    @if($errorMessage)
        <small class="text-red-500 dark:text-red-400">{{ $errorMessage }}</small>
    @endif
</div>

@props(['label', 'name', 'option' => ['label'=>'', 'value'=>''], 'selected'=>''])

@php
    $errorMessage = $errors->first($name);
@endphp

<div class="max-w-lg">
    <label for="{{ $name }}" class="block text-sm font-medium mb-2 dark:text-white">{{ $label }}</label>
    <select name="{{ $name }}" class="py-3 px-4 pe-9 block w-full border border-gray-200 rounded-lg text-sm focus:border-neutral-900 focus:ring-neutral-900 dark:focus:border-gray-100 dark:focus:ring-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:placeholder-neutral-500">
        @foreach ($option as $opt)
            <option value="{{ $opt['value'] }}" {{ $selected == $opt['value'] ? 'selected' : '' }}>
                {{ $opt['label'] }}
            </option>
        @endforeach
    </select>
    @if($errorMessage)
        <small class="text-red-500 dark:text-red-400">{{ $errorMessage }}</small>
    @endif
</div>
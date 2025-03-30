@props(['columns'=>[], 'data'=>[]])

<table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
    <thead class="bg-gray-100 dark:bg-neutral-700">
        <tr>
            @foreach ($columns as $column)
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">
                    {{ $column['label'] }}
                </th>
            @endforeach
            <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Aksi</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
        @foreach ($data as $row)
            <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-neutral-900 dark:even:bg-neutral-800">
                @foreach ($columns as $column)
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ data_get($row, $column['key']) }}
                    </td>
                @endforeach
                <td class="px-6 py-4 flex flex-wrap gap-2">
                    <a href="{{ route('admin.penduduk.show', $row->uuid) }}" class="bg-neutral-700 p-2 px-4 rounded-md text-white flex gap-1 items-center">
                        <i class="ph ph-eye"></i>
                        Manage
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

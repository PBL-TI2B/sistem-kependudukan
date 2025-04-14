@props(['columns'=>[], 'data'=>[], 'details'=>false, 'route'=>''])

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
                @if($details)
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        <a href="{{ route('admin.penduduk.show', $row->uuid) }}" class="bg-neutral-700 p-2 px-4 rounded-md text-white flex gap-1 items-center">
                            <i class="ph ph-eye"></i>
                            Manage
                        </a>
                    </td>
                @else
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200 flex gap-2">
                    <a href="{{ route("admin.$route.edit", $row->uuid) }}" class="bg-sky-600 hover:bg-sky-700 text-white px-4 py-2 rounded-md flex items-center gap-1">
                        <i class="ph ph-pencil"></i>
                        Edit
                    </a>
            
                    <button type="button" class="bg-rose-700 text-white p-2 px-4 rounded-md flex gap-1 items-center" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-scale-animation-modal">
                        <i class="ph ph-trash-simple"></i>
                        Hapus
                    </button>
                </td>
                @endif
            </tr>
            @endforeach
            @if(!$details)
            <x-admin.delete-modal
                title="Hapus Data {{ ucfirst($route) }}"
                description="Apakah Anda yakin ingin menghapus data {{ $route }} ini?"
                route="admin.{{$route}}.destroy"
                :uuid="$row->uuid"
            />
            @endif
    </tbody>
</table>


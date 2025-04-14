@extends('layouts.admin')

@section('content')
<x-admin.bread-crumb
    title='Tambah Domisili'
    :breadcrumbs="[
        ['label' => 'Dashboard', 'route' => 'admin.dashboard'],
        ['label' => 'Domisili', 'route' => 'admin.domisili.index'],
        ['label' => 'Tambah Domisili', 'route' => '']
    ]"
/>

<div class="bg-white dark:bg-neutral-800 p-4 rounded-md">
    <form action="{{ route('admin.domisili.store') }}" method="post">
        @csrf
        <div class="grid gap-y-4">
            <div class="grid grid-cols-2">
                <x-ui.select-form label="*Penduduk" name="penduduk_id" :option="$penduduk" :selected="old('penduduk_id')" />
                <x-ui.select-form label="*No. RT" name="rt_id" :option="$rt" :selected="old('rt_id')" />
            </div>
            <div>
                <label class="block text-sm font-medium mb-2 dark:text-white">*Status Domisili</label>
                <div class="flex gap-x-6">
                    <x-ui.radio-form name="status_tempat_tinggal" value="tetap" label="Tetap" checked="{{ old('status_tempat_tinggal') == 1 }}" />
                    <x-ui.radio-form name="status_tempat_tinggal" value="sementara" label="Sementara" checked="{{ old('status_tempat_tinggal') == 1 }}" />
                </div>
            </div>
        </div>
        <div class="mt-4 md:flex gap-2 justify-between dark:text-white">
            <div>
                <p>Perhatian</p>
                <p class="text-sm">Inputan bertanda * wajib diisi</p>
                <p class="text-sm">Pastikan data benar sebelum menekan tombol simpan</p>
            </div>
            <div class="flex gap-2 items-center mt-2 md:mt-0">
                <div class="bg-neutral-700 p-2 px-4 rounded-md">
                    <a href="{{ route('admin.domisili.index') }}" class="text-white p-2">Batal</a>
                </div>
                <button type="submit" class="bg-emerald-700 text-white py-2 px-4 rounded-md">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection
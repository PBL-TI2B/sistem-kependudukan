@extends('layouts.admin')

@section('content')
<x-admin.bread-crumb
    title="Detail Data Penduduk"
    :breadcrumbs="[
        ['label' => 'Dashboard', 'route' => 'admin.dashboard'],
        ['label' => 'Penduduk', 'route' => 'admin.penduduk.index'],
        ['label' => 'Detail Data Penduduk', 'route' => '']
    ]"
/>
<div class="bg-white dark:bg-neutral-800 p-4 rounded-md">
    <div class="flex justify-between mb-3">
        <h3 class="text-xl font-semibold dark:text-white">Biodata {{ $penduduk->nama_lengkap }}</h3>
        <div class="flex gap-2">
            <a href="{{ route('admin.penduduk.edit', $penduduk->uuid) }}" class="bg-sky-700 text-white p-2 px-4 rounded-md flex gap-1 items-center">
                <i class="ph ph-pencil-simple"></i>
                Perbarui Data
            </a>
            <button type="button" class="bg-rose-700 text-white p-2 px-4 rounded-md flex gap-1 items-center" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal" data-hs-overlay="#hs-scale-animation-modal">
                <i class="ph ph-trash-simple"></i>
                Hapus Data
            </button>
        </div>
    </div>

    <div class="flex w-full">
        <div class="w-1/2">
            <img src="https://placehold.co/330x430" class="w-[330px] h-[430px] object-cover rounded-md">
            {{-- <img src="{{ asset('storage/' . $penduduk->foto) }}" alt="{{ $penduduk->nama_lengkap }}" class="w-48 h-48 object-cover rounded-md"> --}}
        </div>
        <div class="flex flex-col w-full">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block text-left">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <tbody>
                                <x-ui.simple-table-row label="Nama Lengkap" value="{{ $penduduk->nama_lengkap }}" />
                                <x-ui.simple-table-row label="Nomor Induk Kependudukan (NIK)" value="{{ $penduduk->nik }}" />
                                <x-ui.simple-table-row label="Tempat Lahir" value="{{ $penduduk->tempat_lahir }}" />
                                <x-ui.simple-table-row label="Tanggal Lahir" value="{{ $penduduk->tanggal_lahir }}" />
                                <x-ui.simple-table-row label="Jenis Kelamin" value="{{ $penduduk->jenis_kelamin }}" />
                                <x-ui.simple-table-row label="Agama" value="{{ $penduduk->agama }}" />
                                <x-ui.simple-table-row label="Golongan Darah" value="{{ $penduduk->gol_darah }}" />
                                <x-ui.simple-table-row label="Status Perkawinan" value="{{ $penduduk->status_perkawinan }}" />
                                <x-ui.simple-table-row label="Tinggi Badan" value="{{ $penduduk->tinggi_badan }}" />
                                <x-ui.simple-table-row label="Status" value="{{ $penduduk->status }}" />
                                <x-ui.simple-table-row label="Pekerjaan" value="{{ $penduduk->pekerjaan?->nama_pekerjaan }}" />
                                <x-ui.simple-table-row label="Pendidikan Terakhir" value="{{ $penduduk->pendidikan?->jenjang }}" />
                                <x-ui.simple-table-row label="Ayah" value="{{ $penduduk->ayah_id?->nama_lengkap ?? '-' }}" />
                                <x-ui.simple-table-row label="Ibu" value="{{ $penduduk->ibu_id?->nama_lengkap ?? '-' }}" />
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-admin.delete-modal
        title="Hapus Data Penduduk"
        description="Apakah Anda yakin ingin menghapus data penduduk ini?"
        route="admin.penduduk.destroy"
        :uuid="$penduduk->uuid"
    />
@endsection

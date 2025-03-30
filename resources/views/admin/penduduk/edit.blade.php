@extends('layouts.admin')

@section('content')
<x-admin.bread-crumb
    :title="'Perbarui Data Penduduk'"
    :breadcrumbs="[
        ['label' => 'Dashboard', 'route' => 'admin.dashboard'],
        ['label' => 'Penduduk', 'route' => 'admin.penduduk.index'],
        ['label' => 'Perbarui Data Penduduk', 'route' => '']
    ]"
/>
<div class="bg-white dark:bg-neutral-800 p-4 rounded-md">
    <form action="{{ route('admin.penduduk.update', $penduduk->uuid) }}" method="post">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 w-full">
            <x-ui.input-form label="Nama Lengkap" name="nama_lengkap" placeholder="cth: Purnomo" value="{{ $penduduk->nama_lengkap }}" />
            <x-ui.input-form type="file" label="Foto" name="foto" value="{{ $penduduk->foto }}" />
            <x-ui.input-form label="NIK" name="nik" placeholder="cth: 3312200029897456"  value="{{ $penduduk->nik }}" />
            <x-ui.input-form label="Tempat Lahir" name="tempat_lahir" placeholder="cth: Jakarta"  value="{{ $penduduk->tempat_lahir }}" />
            <x-ui.input-form label="Tanggal Lahir" name="tanggal_lahir" type="date"  value="{{ $penduduk->tanggal_lahir }}" />
            <x-ui.select-form label="Jenis Kelamin" name="jenis_kelamin" 
                :option="[
                    ['label'=>'Pilih jenis kelamin', 'value'=>''], 
                    ['label'=>'Laki-Laki', 'value'=>'L'], 
                    ['label'=>'Perempuan', 'value'=>'P']
                ]" 
                :selected="$penduduk->jenis_kelamin ?? ''"
            />
            <x-ui.select-form label="Agama" name="agama" 
                :option="[
                    ['label'=>'Pilih agama', 'value'=>''], 
                    ['label'=>'Islam', 'value'=>'Islam'], 
                    ['label'=>'Kristen', 'value'=>'Kristen'], 
                    ['label'=>'Katolik', 'value'=>'Katolik'], 
                    ['label'=>'Hindu', 'value'=>'Hindu'], 
                    ['label'=>'Budha', 'value'=>'Budha'], 
                    ['label'=>'Konghucu', 'value'=>'Konghucu']
                ]"
                :selected="$penduduk->agama ?? ''"
            />
            <x-ui.input-form label="Gol. Darah" name="gol_darah" placeholder="cth: AB" value="{{ $penduduk->gol_darah }}" />
            <x-ui.select-form label="Status Perkawinan" name="status_perkawinan" 
                :option="[
                    ['label'=>'Pilih status perkawinan', 'value'=>''], 
                    ['label'=>'Belum Kawin', 'value'=>'belum kawin'], 
                    ['label'=>'Kawin', 'value'=>'kawin']
                ]"
                :selected="$penduduk->status_perkawinan ?? ''"
            />
            <x-ui.input-form label="Tinggi Badan" name="tinggi_badan" placeholder="cth: 170 (dalam cm)" value="{{ $penduduk->tinggi_badan }}" />
            <x-ui.select-form label="Status" name="status" 
                :option="[
                    ['label'=>'Pilih status', 'value'=>''], 
                    ['label'=>'Hidup', 'value'=>'hidup'], 
                    ['label'=>'Mati', 'value'=>'mati']
                ]"
                :selected="old('status', $penduduk->status ?? '')"
            />
            <x-ui.select-form label="Pekerjaan" name="pekerjaan_id" :option="$pekerjaan" :selected="$penduduk->pekerjaan_id" />
            <x-ui.select-form label="Pendidikan Terakhir" name="pendidikan_id" :option="$pendidikan" :selected="$penduduk->pendidikan_id" />
            <x-ui.select-form label="Ayah" name="ayah_id" 
                :option="collect($ayah_id)->reject(fn($a) => $a['value'] == $penduduk->id)->toArray()" 
                :selected="$penduduk->ayah_id"
            />
            <x-ui.select-form label="Ibu" name="ibu_id" 
                :option="collect($ibu_id)->reject(fn($a) => $a['value'] == $penduduk->id)->toArray()" 
                :selected="$penduduk->ibu_id"
            />
        </div>
        <div class="mt-4 md:flex gap-2 justify-between dark:text-white">
            <div>
                <p>Perhatian</p>
                <p class="text-sm">Inputan bertanda * wajib diisi</p>
                <p class="text-sm">Pastikan data benar sebelum menekan tombol simpan</p>
            </div>
            <div class="flex gap-2 items-center mt-2 md:mt-0">
                <div class="bg-neutral-700 p-2 px-4 rounded-md">
                    <a href="{{ route('admin.penduduk.index') }}" class="text-white p-2">Batal</a>
                </div>
                <button type="submit" class="bg-emerald-700 text-white py-2 px-4 rounded-md">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection
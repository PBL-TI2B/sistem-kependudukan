@extends('layouts.admin')

@section('content')
    <div class="w-full">
        <h2 class="text-2xl font-bold mb-2 dark:text-white">Statistik Desa Jabung</h2>
        <div class="w-full flex gap-4">
            <div class="w-8/12 bg-gradient-to-br from bg-teal-500 to-teal-700 rounded-md p-3">
                <i class="ph ph-hand-heart text-[100px] text-teal-300"></i>
                <p class="my-6 text-lg font-medium text-yellow-300">Bantuan Sosial</p>
                <h3 class="text-white text-xl font-bold">Dari Desa untuk Warga</h3>
                <p class="text-white">Wujudkan kesejahteraan warga desa dengan bantuan sosial yang tepat sasaran</p>
                <button type="button" id="btn" class="w-full bg-white p-2 rounded-md my-4">Buat Bantuan</button>
            </div>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 w-full">
                <x-ui.simple-card />
                <x-ui.simple-card />
                <x-ui.simple-card />
                <x-ui.simple-card />
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('#btn')?.addEventListener('click', () => {
            iziToast.show({
                title: 'Selamat Datang!',
                message: 'Selamat datang di halaman dashboard admin',
                theme: 'dark',
                position: 'topRight',
                timeout: 5000,
                progressBar: false,
            });
        });
    });
</script>
@endpush

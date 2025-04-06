@extends('layouts.admin')

@section('content')
<div class="flex flex-col bg-gray-50 dark:bg-neutral-800">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <x-admin.table-header route="penduduk" />

          <div class="overflow-hidden">
            @if(!$penduduk->isEmpty())
                <x-ui.table :columns="$tableColumns" :data="$penduduk->items()"  />
            @else
                <p class="p-4 dark:text-white">Data penduduk tidak ditemukan</p>
            @endif
          </div>

          <div class="py-1 px-4">
            {{ $penduduk->links() }}
          </div>
          
          
        </div>
      </div>
    </div>
  </div>
@endsection

@if(session('success'))
  @push('scripts')
      <script>
          iziToast.success({
              position: 'topRight',
              title: 'Berhasil',
              message: @json(session('success')),
          });
      </script>
  @endpush
@endif

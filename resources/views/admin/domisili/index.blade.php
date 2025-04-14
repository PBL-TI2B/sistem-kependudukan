@extends('layouts.admin')

@section('content')
<div class="flex flex-col bg-gray-50 dark:bg-neutral-800">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <x-admin.table-header route="domisili" />

          <div class="overflow-hidden">
            @if(!$domisili->isEmpty())
                <x-ui.table :columns="$tableColumns" :data="$domisili->items()" route="domisili"  />
            @else
                <p class="p-4 dark:text-white">Data domisili tidak ditemukan</p>
            @endif
          </div>

          <div class="py-1 px-4">
            {{ $domisili->links() }}
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

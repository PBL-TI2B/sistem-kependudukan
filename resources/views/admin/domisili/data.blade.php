<x-admin.template-pdf>
    <h2 class="title">Data Domisili Tahun {{ date('Y') }}</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Status Tinggal</th>
                <th>No. RT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($domisili as $row)
            <tr>
                <td>{{ $row->penduduk->nama_lengkap }}</td>
                <td>{{ $row->penduduk->nik }}</td>
                <td>{{ $row->penduduk->tempat_lahir }}, {{ \Carbon\Carbon::parse($row->penduduk->tanggal_lahir)->format('d-m-Y') }}</td>
                <td>{{ $row->penduduk->jenis_kelamin }}</td>
                <td>{{ $row->penduduk->pendidikan?->jenjang ?? '-' }}</td>
                <td>{{ $row->penduduk->pekerjaan?->nama_pekerjaan ?? '-' }}</td>
                <td>{{ $row->status_tempat_tinggal }}</td>
                <td>{{ $row->rt->no_rt }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-admin.template-pdf>

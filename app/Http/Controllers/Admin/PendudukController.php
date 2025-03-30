<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tableColumns = [
            ['label' => 'Nama', 'key' => 'nama_lengkap'],
            ['label' => 'Tempat Tanggal Lahir', 'key' => 'tempat_lahir'],
            ['label' => 'Jenis Kelamin', 'key' => 'jenis_kelamin'],
            ['label' => 'Pekerjaan', 'key' => 'pekerjaan.pekerjaan'],
            ['label' => 'Pendidikan', 'key' => 'pendidikan.pendidikan'],
            ['label' => 'Status Perkawinan', 'key' => 'status_perkawinan'],
        ];
        $penduduk = Penduduk::with('pekerjaan', 'pendidikan')->paginate(6);
        return view('admin.penduduk.index', compact('penduduk', 'tableColumns'));
    }

    // fungsi custom untuk pencarian data
    public function search(Request $request) 
    {   $tableColumns = [
            ['label' => 'Nama', 'key' => 'nama_lengkap'],
            ['label' => 'Tempat Tanggal Lahir', 'key' => 'tempat_lahir'],
            ['label' => 'Jenis Kelamin', 'key' => 'jenis_kelamin'],
            ['label' => 'Pekerjaan', 'key' => 'pekerjaan.pekerjaan'],
            ['label' => 'Pendidikan', 'key' => 'pendidikan.pendidikan'],
            ['label' => 'Status Perkawinan', 'key' => 'status_perkawinan'],
        ];
        $search = $request->search;
        $penduduk = Penduduk::where('nama_lengkap', 'like', '%'.$search.'%')->paginate(6);
        return view('admin.penduduk.index', compact('penduduk', 'tableColumns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penduduk = Penduduk::with('pekerjaan', 'pendidikan')->get();

        // variabel untuk menampilkan data pekerjaan dan pendidikan pada select option
        $pekerjaan = Pekerjaan::all()->map(fn($p) => ['value' => $p->id, 'label' => $p->nama_pekerjaan])->toArray();
        $pendidikan = Pendidikan::all()->map(fn($p) => ['value' => $p->id,'label' => $p->jenjang])->toArray();

        $ayah_id = Penduduk::where('jenis_kelamin', 'L')
        ->where('status_perkawinan', 'kawin')
        ->get()
        ->map(fn($p) => [
            'value' => $p->id,
            'label' => $p->nama_lengkap
        ])
        ->toArray();

        $ibu_id = Penduduk::where('jenis_kelamin', 'P')
        ->where('status_perkawinan', 'kawin')
        ->get()
        ->map(fn($p) => [
            'value' => $p->id,
            'label' => $p->nama_lengkap
        ])  
        ->toArray();
        
        // variabel untuk menambahkan data default
        array_unshift($pekerjaan, ['value' => null, 'label' => 'Pilih pekerjaan']);
        array_unshift($pendidikan, ['value' => null, 'label' => 'Pilih pendidikan']);
        array_unshift($ayah_id, ['value' => null, 'label' => 'Cari ayah dari penduduk']);
        array_unshift($ibu_id, ['value' => null, 'label' => 'Cari ibu dari penduduk']);

        return view('admin.penduduk.create', compact('penduduk', 'pekerjaan', 'pendidikan', 'ayah_id', 'ibu_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'nik' => 'required',
                'nama_lengkap' => 'required',
                'tempat_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
                'pekerjaan_id' => 'required',
                'pendidikan_id' => 'required',
                'agama' => 'required',
                'status_perkawinan' => 'required',
                'status'=>'required',
                'ayah_id' => 'nullable|exists:penduduk,id|not_in:'.$penduduk->id,
                'ibu_id' => 'nullable|exists:penduduk,id|not_in:'.$penduduk->id,
            ],
            [
                'nik.required' => 'NIK wajib diisi',
                'nama_lengkap.required' => 'Nama lengkap wajib diisi',
                'jenis_kelamin.required' => 'Jenis kelamin wajib diisi',
                'tempat_lahir.required' => 'Tempat lahir wajib diisi',
                'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
                'pekerjaan_id.required' => 'Pekerjaan wajib diisi',
                'pendidikan_id.required' => 'Pendidikan wajib diisi',
                'agama.required' => 'Agama wajib diisi',
                'status_perkawinan.required' => 'Status perkawinan wajib diisi',
                'status.required' => 'Status wajib diisi',
            ]);

        Penduduk::create($request->all());
        return redirect()->route('admin.penduduk.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penduduk = Penduduk::where('uuid', $id)->firstOrFail();
        return view('admin.penduduk.show', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $uuid)
    {
        $penduduk = Penduduk::where('uuid', $uuid)->firstOrFail();

        // Ambil semua data pekerjaan dan pendidikan dalam format ['value' => id, 'label' => nama]
        $pekerjaan = Pekerjaan::all()->map(fn($p) => ['value' => $p->id, 'label' => $p->pekerjaan])->toArray();
        $pendidikan = Pendidikan::all()->map(fn($p) => ['value' => $p->id, 'label' => $p->pendidikan])->toArray();

        // Ambil data ayah (laki-laki, sudah menikah)
        $ayah_id = Penduduk::where('jenis_kelamin', 'L')
            ->where('status_perkawinan', 'kawin')
            ->get()
            ->map(fn($p) => ['value' => $p->id, 'label' => $p->nama_lengkap])
            ->toArray();

        // Ambil data ibu (perempuan, sudah menikah)
        $ibu_id = Penduduk::where('jenis_kelamin', 'P')
            ->where('status_perkawinan', 'kawin')
            ->get()
            ->map(fn($p) => ['value' => $p->id, 'label' => $p->nama_lengkap])
            ->toArray();

        // Tambahkan opsi default di awal array
        array_unshift($pekerjaan, ['value' => '', 'label' => 'Pilih pekerjaan']);
        array_unshift($pendidikan, ['value' => '', 'label' => 'Pilih pendidikan']);
        array_unshift($ayah_id, ['value' => '', 'label' => 'Cari ayah dari penduduk']);
        array_unshift($ibu_id, ['value' => '', 'label' => 'Cari ibu dari penduduk']);

        return view('admin.penduduk.edit', compact('penduduk', 'pekerjaan', 'pendidikan', 'ayah_id', 'ibu_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penduduk = Penduduk::where('uuid', $id)->firstOrFail();

        $request->validate([
            'nik' => 'required',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'pekerjaan_id' => 'required',
            'pendidikan_id' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'status'=>'required',
            'ayah_id' => 'nullable|exists:penduduk,id|not_in:'.$penduduk->id,
            'ibu_id' => 'nullable|exists:penduduk,id|not_in:'.$penduduk->id,
        ],
        [
            'nik.required' => 'NIK wajib diisi',
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'jenis_kelamin.required' => 'Jenis kelamin wajib diisi',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
            'pekerjaan_id.required' => 'Pekerjaan wajib diisi',
            'pendidikan_id.required' => 'Pendidikan wajib diisi',
            'agama.required' => 'Agama wajib diisi',
            'status_perkawinan.required' => 'Status perkawinan wajib diisi',
            'status.required' => 'Status wajib diisi',
        ]);

        $penduduk->update($request->all());
        return redirect()->route('admin.penduduk.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penduduk = Penduduk::where('uuid', $id)->firstOrFail();
        $penduduk->delete();
        return redirect()->route('admin.penduduk.index')->with('success', 'Data berhasil dihapus');
    }
}

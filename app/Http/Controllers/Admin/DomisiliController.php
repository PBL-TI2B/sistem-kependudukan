<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Domisili;
use App\Models\Penduduk;
use App\Models\Rt;
use Barryvdh\DomPDF\Facade\Pdf;


class DomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $domisili = Domisili::with(['rt', 'penduduk'])->paginate(6);
        $tableColumns = [
            ['label' => 'Nama Lengkap', 'key' => 'penduduk.nama_lengkap'],
            ['label' => 'Jenis Kelamin', 'key' => 'penduduk.jenis_kelamin'],
            ['label' => 'Pekerjaan', 'key' => 'penduduk.pekerjaan.nama_pekerjaan'],
            ['label' => 'Pendidikan', 'key' => 'penduduk.pendidikan.jenjang'],
            ['label' => 'Status Perkawinan', 'key' => 'penduduk.status_perkawinan'],
            ['label' => 'Nomor RT', 'key' => 'rt.nomor_rt'],
            ['label'=>'Status Tinggal', 'key'=>'status_tempat_tinggal'],
        ];
        return view('admin.domisili.index', compact('domisili', 'tableColumns'));
    }

    public function search() {
        $search = request()->input('search');
        $domisili = Domisili::with(['rt', 'penduduk'])
            ->whereHas('penduduk', function($query) use ($search) {
                $query->where('nama_lengkap', 'like', "%$search%");
            })
            ->orWhereHas('rt', function($query) use ($search) {
                $query->where('nomor_rt', 'like', "%$search%");
            })
            ->paginate(6);
        $tableColumns = [
            ['label' => 'Nama Lengkap', 'key' => 'penduduk.nama_lengkap'],
            ['label' => 'Jenis Kelamin', 'key' => 'penduduk.jenis_kelamin'],
            ['label' => 'Pekerjaan', 'key' => 'penduduk.pekerjaan.nama_pekerjaan'],
            ['label' => 'Pendidikan', 'key' => 'penduduk.pendidikan.jenjang'],
            ['label' => 'Status Perkawinan', 'key' => 'penduduk.status_perkawinan'],
            ['label' => 'Nomor RT', 'key' => 'rt.nomor_rt'],
            ['label'=>'Status Tinggal', 'key'=>'status_tempat_tinggal'],
        ];
        
        return view('admin.domisili.index', compact('domisili', 'tableColumns'));
    }

    public function exportPdf()
    {
        $domisili = Domisili::with('rt', 'penduduk')->get();
        $pdf = Pdf::loadView('admin.domisili.data', compact('domisili'));
        return $pdf->download('data-domisili.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pendudukTerpakai = Domisili::pluck('penduduk_id')->toArray();

        $penduduk = Penduduk::whereNotIn('id', $pendudukTerpakai)
        ->get()
        ->map(fn($p)=>[
            'value'=>$p->id,
            'label'=>$p->nama_lengkap,
        ])->toArray();

        $rt = Rt::all()
        ->map(fn($r)=>[
            'value'=>$r->id,
            'label'=>$r->nomor_rt,
        ])->toArray();

        array_unshift($penduduk, ['value'=>null, 'label'=>'Pilih Penduduk']);
        array_unshift($rt, ['value'=>null, 'label'=>'Pilih RT']);
        
        return view('admin.domisili.create', compact('penduduk', 'rt'));
    }

    public function exportExcel()
    {
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="penduduk.csv"',
        ];
    
        $callback = function () {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['Nama', 'NIK', 'Tanggal Lahir', 'Nomor RT', 'Status Tinggal']);
    
            foreach (Domisili::all() as $data) {
                fputcsv($handle, [
                    $data->penduduk->nama_lengkap,
                    $data->penduduk->nik,
                    $data->penduduk->tanggal_lahir,
                    $data->rt->nomor_rt,
                    $data->status_tempat_tinggal,
                ]);
            }
    
            fclose($handle);
        };
    
        return response()->stream($callback, 200, $headers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'penduduk_id' => 'required|exists:penduduk,id',
            'rt_id' => 'required|exists:rt,id',
            'status_tempat_tinggal' => 'required|string|max:255',
        ], 
        [
            'penduduk_id.required' => 'Penduduk wajib diisi',
            'rt_id.required' => 'RT wajib diisi',
            'status_tempat_tinggal.required' => 'Status tempat tinggal wajib diisi',
        ]);
        Domisili::create($request->all());
        return redirect()->route('admin.domisili.index')->with('success', 'Data domisili berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $domisili = Domisili::where('uuid', $id)->firstOrFail();
        $penduduk = Penduduk::all()->map(fn($p)=>[
            'value'=>$p->id,
            'label'=>$p->nama_lengkap,
        ])->toArray();
        $rt = Rt::all()->map(fn($r)=>[
            'value'=>$r->id,
            'label'=>$r->nomor_rt,
        ])->toArray();

        array_unshift($penduduk, ['value'=>null, 'label'=>'Pilih Penduduk']);
        array_unshift($rt, ['value'=>null, 'label'=>'Pilih RT']);

        return view('admin.domisili.edit', compact('domisili', 'penduduk', 'rt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $domisili = Domisili::where('uuid', $id)->firstOrFail();
        $request->validate([
            'penduduk_id' => 'required|exists:penduduk,id',
            'rt_id' => 'required|exists:rt,id',
            'status_tempat_tinggal' => 'required|string|max:255',
        ],  
        [
            'penduduk_id.required' => 'Penduduk wajib diisi',
            'rt_id.required' => 'RT wajib diisi',
            'status_tempat_tinggal.required' => 'Status tempat tinggal wajib diisi',
        ]);
        $domisili->update($request->all());
        return redirect()->route('admin.domisili.index')->with('success', 'Data domisili berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $domisili = Domisili::where('uuid', $id)->firstOrFail();
        $domisili->delete();
        return redirect()->route('admin.domisili.index')->with('success', 'Data domisili berhasil dihapus');
    }
}

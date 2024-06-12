<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Lomba;

class LombaController extends Controller
{
    public function index()
    {
        $lombas = Lomba::all();
        return view('lombas.index', compact('lombas'));
    }

    public function create()
    {
        return view('lombas.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'tanggal' => 'required|date',
        'lokasi' => 'required',
        'jumlah_peserta' => 'required|integer',
        'keterangan' => 'nullable'
    ]);

    $data = $request->except('_token'); // Exclude _token from data
    Lomba::create($data);

    return redirect()->route('lombas.index')->with('success', 'Lomba berhasil ditambahkan.');
}

    public function edit(Lomba $lomba)
    {
        return view('lombas.edit', compact('lomba'));
    }

    public function update(Request $request, Lomba $lomba)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required|date',
            'lokasi' => 'required',
            'jumlah_peserta' => 'required|integer',
            'keterangan' => 'nullable'
        ]);
    
        $lomba->update($request->all());
    
        return redirect()->route('lombas.index')->with('success', 'Data lomba berhasil diperbarui.');
    }
    

    public function destroy(Lomba $lomba)
    {
        $lomba->delete();

        return redirect()->route('lombas.index')->with('success', 'Lomba berhasil dihapus.');
    }
    public function cetak()
    {
        $lombas = Lomba::all();
        $pdf = Pdf::loadview('lombas.cetak', compact('lombas'));
        return $pdf->download('laporan-lomba.pdf');
    }

}

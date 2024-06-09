<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {  
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:admins,email',
            'kategori_olahraga' => 'required',
            'no_tlp' => 'required',
            'lokasi_saat_ini' => 'required',
            'kondisi_fisik' => 'required',
        ]);

        $admin = new Admin();
        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->kategori_olahraga = $request->kategori_olahraga;
        $admin->no_tlp = $request->no_tlp;
        $admin->lokasi_saat_ini = $request->lokasi_saat_ini;
        $admin->kondisi_fisik = $request->kondisi_fisik;
        $admin->save();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $admins = Admin::all();
        $html = view('admins.pdf', compact('admins'))->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
    
        // Simpan PDF
        $output = $dompdf->output();
        file_put_contents(public_path('admins.pdf'), $output);
    

        return redirect()->route('admins.index')->with('success', 'Data admin berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:admins,email,'.$id,
            'kategori_olahraga' => 'required',
            'no_tlp' => 'required',
            'lokasi_saat_ini' => 'required',
            'kondisi_fisik' => 'required',
        ]);

        $admin = Admin::find($id);
        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->kategori_olahraga = $request->kategori_olahraga;
        $admin->no_tlp = $request->no_tlp;
        $admin->lokasi_saat_ini = $request->lokasi_saat_ini;
        $admin->kondisi_fisik = $request->kondisi_fisik;
        $admin->save();

        return redirect()->route('admins.index')->with('success', 'Data admin berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        
        return redirect()->route('admins.index')->with('success', 'Data admin berhasil dihapus.');
    }
   

    
    


}

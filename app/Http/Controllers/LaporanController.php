<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|numeric',
            'tanggal_kejadian' => 'required|date',
        ]);

        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'lokasi' => $request->lokasi,
            'tinggi_genangan' => $request->tinggi_genangan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
        ]);

        return redirect('/laporan')->with('success', 'Laporan kejadian banjir berhasil dikirim dan tersimpan di sistem!');
    }

    public function index()
    {
        $laporan = Laporan::all();
        return view('laporan.index', compact('laporan'));
    }
}
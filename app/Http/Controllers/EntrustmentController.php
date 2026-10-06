<?php

namespace App\Http\Controllers;

use App\Models\Entrustment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrustmentController extends Controller
{
    public function index()
    {
        $entrustments = Entrustment::latest()->get();

        return view('entrustments.index', compact('entrustments'));
    }

    public function create()
    {
        return view('entrustments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kucing' => 'required',
            'umur' => 'required|integer|min:0',
            'jenis_kelamin' => 'required',
            'lokasi' => 'required',
            'alasan' => 'required',
            'deskripsi' => 'nullable',
        ]);

        Entrustment::create([
            'user_id' => Auth::id(),
            'nama_kucing' => $request->nama_kucing,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'lokasi' => $request->lokasi,
            'alasan' => $request->alasan,
            'deskripsi' => $request->deskripsi,
            'status' => 'menunggu',
        ]);

        return redirect()
            ->route('entrustments.index')
            ->with('success', 'Pengajuan penitipan kucing berhasil dikirim.');
    }
}
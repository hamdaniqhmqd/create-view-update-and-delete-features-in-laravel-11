<?php

namespace App\Http\Controllers;

use App\Models\data_file;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DataFileController extends Controller
{
    public function index(): View
    {
        $title = 'Data File';
        $data_file = data_file::all();

        return view('file', compact('title', 'data_file'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        data_file::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('teks')->with('success', 'Data Teks Berhasil');
    }

    public function update(Request $request, $id_file)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        // dd($request->all());

        $data = data_file::findOrFail($id_file);

        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('teks')->with('success', 'Data Teks Berhasil');
    }

    public function delete($id_file)
    {
        $data = data_file::findOrFail($id_file);

        $data->delete();

        return redirect()->route('teks')->with('success', 'Data Teks Berhasil');
    }
}

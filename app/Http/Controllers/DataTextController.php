<?php

namespace App\Http\Controllers;

use App\Models\data_text;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DataTextController extends Controller
{
    public function index(): View
    {
        $title = 'Data Teks';
        $dataTeks = data_text::all();

        return view('teks', compact('title', 'dataTeks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        data_text::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('teks')->with('success', 'Data Teks Berhasil');
    }

    public function update(Request $request, $id_text)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        // dd($request->all());

        $data = data_text::findOrFail($id_text);

        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('teks')->with('success', 'Data Teks Berhasil');
    }

    public function delete($id_text)
    {
        $data = data_text::findOrFail($id_text);

        $data->delete();

        return redirect()->route('teks')->with('success', 'Data Teks Berhasil');
    }
}

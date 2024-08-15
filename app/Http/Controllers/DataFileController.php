<?php

namespace App\Http\Controllers;

use App\Models\data_file;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'gambar' => 'required',
            'file' => 'required',
            'video' => 'required',
            'audio' => 'required',
        ]);

        $date = Carbon::now()->format('Y-m-d_H-i-s');

        $gambar = $request->file('gambar');
        $namaGambar = $date . '_' . $gambar->getClientOriginalName();
        $gambar->storeAs('img', $namaGambar, 'public');

        $file = $request->file('file');
        $namafile = $date . '_' . $file->getClientOriginalName();
        $file->storeAs('doc', $namafile, 'public');

        $video = $request->file('video');
        $namavideo = $date . '_' . $video->getClientOriginalName();
        $video->storeAs('video', $namavideo, 'public');

        $audio = $request->file('audio');
        $namaaudio = $date . '_' . $audio->getClientOriginalName();
        $audio->storeAs('audio', $namaaudio, 'public');

        data_file::create([
            'gambar' => $namaGambar,
            'file' => $namafile,
            'video' => $namavideo,
            'audio' => $namaaudio,
        ]);

        return redirect()->route('file')->with('success', 'Data file Berhasil');
    }

    public function update(Request $request, $id_file)
    {
        $request->validate([
            'gambar' => 'nullable',
            'file' => 'nullable',
            'video' => 'nullable',
            'audio' => 'nullable',
        ]);
        // dd($request->all());

        $data = data_file::findOrFail($id_file);

        $date = Carbon::now()->format('Y-m-d_H-i-s');

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete('/img/' . $data->gambar);

            $gambar = $request->file('gambar');
            $namaGambar = $date . '_' . $gambar->getClientOriginalName();
            $gambar->storeAs('img', $namaGambar, 'public');

            $data->update([
                'gambar' => $namaGambar,
            ]);
        }

        if ($request->hasFile('file')) {
            Storage::disk('public')->delete('/doc/' . $data->file);

            $file = $request->file('file');
            $namafile = $date . '_' . $file->getClientOriginalName();
            $file->storeAs('doc', $namafile, 'public');

            $data->update([
                'file' => $namafile,
            ]);
        }

        if ($request->hasFile('video')) {
            Storage::disk('public')->delete('/video/' . $data->video);

            $video = $request->file('video');
            $namavideo = $date . '_' . $video->getClientOriginalName();
            $video->storeAs('video', $namavideo, 'public');

            $data->update([
                'video' => $namavideo,
            ]);
        }

        if ($request->hasFile('audio')) {
            Storage::disk('public')->delete('/audio/' . $data->audio);

            $audio = $request->file('audio');
            $namaaudio = $date . '_' . $audio->getClientOriginalName();
            $audio->storeAs('audio', $namaaudio, 'public');

            $data->update([
                'audio' => $namaaudio,
            ]);
        }

        return redirect()->route('file')->with('success', 'Data file Berhasil');
    }

    public function delete($id_file)
    {
        $data = data_file::findOrFail($id_file);

        Storage::disk('public')->delete('/img/' . $data->gambar);
        Storage::disk('public')->delete('/doc/' . $data->file);
        Storage::disk('public')->delete('/video/' . $data->video);
        Storage::disk('public')->delete('/audio/' . $data->audio);

        $data->delete();

        return redirect()->route('file')->with('success', 'Data file Berhasil');
    }
}

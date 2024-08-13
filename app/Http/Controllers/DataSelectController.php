<?php

namespace App\Http\Controllers;

use App\Models\data_select;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\data_text;

class DataSelectController extends Controller
{
    public function index(): View
    {
        $title = 'Data Select';
        $dataTeks = data_text::all();
        $dataSelect = data_select::with('tabelDataTeks')->get();

        return view('select', compact('title', 'dataSelect', 'dataTeks'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'kategori' => 'required',
            'data_teks' => 'required',
        ]);

        data_select::create([
            'kategori' => $request->kategori,
            'data_teks' => $request->data_teks,
        ]);

        return redirect()->route('select')->with('success', 'Data Teks Berhasil');
    }

    public function update(Request $request, $id_select)
    {
        $request->validate([
            'kategori' => 'required',
            'data_teks' => 'required',
        ]);
        // dd($request->all());

        $data = data_select::findOrFail($id_select);

        $data->update([
            'kategori' => $request->kategori,
            'data_teks' => $request->data_teks,
        ]);

        return redirect()->route('select')->with('success', 'Data Teks Berhasil');
    }

    public function delete($id_select)
    {
        // dd($id_select);
        $data = data_select::findOrFail($id_select);

        $data->delete();

        return redirect()->route('select')->with('success', 'Data Teks Berhasil');
    }
}

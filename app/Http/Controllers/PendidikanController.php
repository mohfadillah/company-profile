<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $datas = Pendidikan::get();
        $title = "Data Pendidikan";
        return view('pendidikan/index', compact('datas', 'title'));
    }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $datas = Profile::get();
    //     $title = "Data Profile";
    //     return view('profile.index', compact('datas', 'title'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Pendidikan";
        return view('pendidikan/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        Pendidikan::create([
            'universitas' => $request->universitas,
            'jurusan' => $request->jurusan,
            'nilai_akhir' => $request->nilai_akhir,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
                    ]);
        return redirect()->to('admin/pendidikan')->with('message', 'Data Berhasil Ditambah');
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
        $edit = Pendidikan::find($id);
        $title = "Edit Data " . $edit->name;
        return view('pendidikan/edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pendidikan::where('id', $id)->update([
            'universitas' => $request->universitas,
            'jurusan' => $request->jurusan,
            'nilai_akhir' => $request->nilai_akhir,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
        ]);
        return redirect()->to('admin/pendidikan')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pendidikan::where('id', $id)->delete();
        return redirect()->to('admin/pendidikan')->with('message', 'Data Berhasil Dihapus');
    }
}

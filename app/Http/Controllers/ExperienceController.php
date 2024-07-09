<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $datas = Experience::get();
        $title = "Data Pengalaman";
        return view('experience/index', compact('datas', 'title'));
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
        $title = "Tambah Experience";
        return view('experience/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        Experience::create([
            'pekerjaan' => $request->pekerjaan,
            'perusahaan' => $request->perusahaan,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'description' => $request->description,
                    ]);
        return redirect()->to('admin/experience')->with('message', 'Data Berhasil Ditambah');
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
        $edit = Experience::find($id);
        $title = "Edit Data " . $edit->name;
        return view('experience/edit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Experience::where('id', $id)->update([
            'pekerjaan' => $request->pekerjaan,
            'perusahaan' => $request->perusahaan,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'description' => $request->description,
        ]);
        return redirect()->to('admin/experience')->with('message', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Experience::where('id', $id)->delete();
        return redirect()->to('admin/experience')->with('message', 'Data Berhasil Dihapus');
    }
}

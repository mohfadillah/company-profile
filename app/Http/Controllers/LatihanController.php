<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    // public $name;

    public function index()
    {
        // $this->name = "Fadil";
        // return "Selamat Datang Di Laravel 11 " . $this->name;
        return view('latihan.index');
    }

    public function create()
    {
        return "Selamat Datang Di Laravel 11 ";
    }

    public function edit()
    {
    }

    public function show()
    {
    }

    public function delete()
    {
    }

    public function penjumlahan()
    {
        $jumlah = 0;
        return view('latihan.penjumlahan', compact('jumlah'));
    }
    public function pengurangan()
    {
        // $data['jumlah'];
        $kurang = 0;
        return view('latihan.pengurangan', compact('kurang'));
    }
    public function pembagian()
    {
        $bagi = 0;
        return view('latihan.pembagian', compact('bagi'));
    }
    public function perkalian()
    {
        $kali = 0;
        return view('latihan.perkalian', compact('kali'));
    }

    public function storePerkalian(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $kali = $angka1 * $angka2;
        return view('latihan.perkalian', compact('kali'));
    }
    public function storePenjumlahan(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 + $angka2;
        return view('latihan.penjumlahan', compact('jumlah'));
        // return redirect()->to('penjumlahan')->with(['total', $jumlah]);
    }
    public function storePengurangan(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $kurang = $angka1 - $angka2;
        return view('latihan.pengurangan', compact('kurang'));
    }
    public function storePembagian(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $bagi = $angka1 / $angka2;
        return view('latihan.pembagian', compact('bagi'));
    }
}

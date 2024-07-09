<?php

namespace App\Http\Controllers;
use App\Models\Experience;
use App\Models\Pendidikan;
use App\Models\Profile;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pekerjaan_datas = Experience::get();
        // $pendidikan_datas = Experience::get();
        $profile = Profile::get()->last();
        $pekerjaan = Experience::get()->last();
        $pendidikan = Pendidikan::get()->last();
        $setting = Setting::get()->last();
        // $perusahaan = Experience::get()->last();
        // $tanggal_mulai = Experience::get()->last();
        // $tanggal_akhir = Experience::get()->last();
        // $description = Experience::get()->last();
        return view('home.index', compact('profile', 'pekerjaan_datas', 'pekerjaan', 'pendidikan', 'setting'));
    }
}

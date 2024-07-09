@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.experience.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Nama Pekerjaan</label>
                    <input type="text" name="pekerjaan" placeholder="Masukkan Nama Pekerjaan Anda.." class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" name="perusahaan" placeholder="Masukkan Perusahaan Anda.." class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" placeholder="Masukkan Tanggal Mulai Anda.." class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Akhir</label>
                    <input type="date" name="tanggal_akhir" placeholder="Masukkan Tanggal Akhir Anda.." class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea name="description" placeholder="Masukkan Deskripsi Pekerjaan Anda.." id="" cols="30" rows="10"
                        class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.pendidikan.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Nama Universitas</label>
                    <input type="text" name="universitas" placeholder="Masukkan Nama Universitas Anda.." class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Jurusan</label>
                    <input type="text" name="jurusan" placeholder="Masukkan Jurusan Anda.." class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nilai</label>
                    <input type="text" name="nilai_akhir" placeholder="Masukkan Nilai/IPK Terakhir Anda.." class="form-control"></input>
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
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection

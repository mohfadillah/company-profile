@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.experience.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="">Pekerjaan</label>
                    <input value="{{$edit->pekerjaan}}" type="text" name="pekerjaan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Perusahaan</label>
                    <input value="{{$edit->perusahaan}}" name="perusahaan" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Mulai</label>
                    <input value="{{$edit->tanggal_mulai}}" name="tanggal_mulai" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Akhir</label>
                    <input value="{{$edit->tanggal_akhir}}" name="tanggal_akhir" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi Pekerjaan</label>
                    <input value="{{$edit->description}}" name="description" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection

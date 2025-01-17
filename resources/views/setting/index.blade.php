@extends('layouts.app')
@section('title', 'Data Profil')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{route('admin.setting.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Foto Profil</label>
                    <input type="file" name="profile_picture" id="">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection

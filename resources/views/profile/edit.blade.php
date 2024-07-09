@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('admin.profile.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="">Nama</label>
                    <input value="{{$edit->name}}" type="text" name="name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input value="{{$edit->email}}" name="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Nomor Telp</label>
                    <input value="{{$edit->phone}}" type="number" name="phone" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat</label>
                    <textarea name="address" id="" cols="30" rows="10"
                        class="form-control">{{$edit->address}}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                </div>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" required>{{$edit->description}}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">GitHub</label>
                    <input value="{{$edit->github_link}}" type="text" name="github_link"  class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">LinkedIn</label>
                    <input value="{{$edit->linkedin_link}}" type="text" name="linkedin_link" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Facebook</label>
                    <input value="{{$edit->facebook_link}}" type="text" name="facebook_link"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Twitter</label>
                    <input value="{{$edit->twitter_link}}" type="text" name="twitter_link"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection

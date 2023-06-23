@extends('layouts.default')

@section('layout')
<x-navbar />
<div class="container mt-5">
    <form action="ticket/store" method="POST">
        {{ csrf_field() }}
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="kategori" class="form-select" aria-label="Default select example" required>
                <option selected>=== Pilih Kategori ===</option>
                <option value="Sarana dan Prasarana">Sarana dan Prasarana</option>
                <option value="Jaringan Kampus">Jaringan Kampus</option>
                <option value="Infrastruktur">Infrastruktur</option>
                <option value="Email">Email</option>
                <option value="Keamanan">Keamanan</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input id="judul" name="judul" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label lass="form-label">Deskripsi</label>
            <div class="form-floating">
                <textarea name="deskripsi" class="form-control" style="height: 200px"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

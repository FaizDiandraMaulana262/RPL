@extends('layouts.default')

@section('layout')
<x-navbar />
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-6">
            <img class="mx-auto" src="{{ url('/assets/logo.png') }}" alt="Logo UMM" style="width: 500px">
        </div>
        <div class="col-12 col-md-6 my-auto">
            <h3>Selamat Datang di Helpdesk UMM</h3>
            <p class="mt-2">Website ini digunakan memudahkan masyarakat umm untuk bantuai mengenai masalah yang ada dikampus. <b>Untuk pengajuan tiket</b> kalian bisa kunjungi <a href="ticket">Open Ticket</a></p>
        </div>
    </div>
</div>
@endsection

@extends('layouts.default')

@section('layout')
    <div class="d-flex align-items-center vh-100">
        <main class="w-100 m-auto" style="max-width: 400px">
            <div class="row">
                <div class="col-12">
                    <center>
                        <img src="{{ url('/assets/logo.png') }}" alt="Logo UMM" style="width: 200px">
                    </center>
                </div>
                <div class="col-12">
                    <form action="{{ url('/login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-floating">
                            <input type="email" class="form-control form-control-sm" id="userEmail" name="userEmail"
                                placeholder="user@mail.com">
                            <label for="userEmail">Email Address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control form-control-sm" id="userPassword"
                                name="userPassword" placeholder="Password">
                            <label for="userPassword">Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </form>
                </div>
                @if (session('error'))
                    <div class="col-12">
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
            </div>
        </main>
    </div>
@endsection

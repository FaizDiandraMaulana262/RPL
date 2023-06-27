@extends('layouts.default')

@section('layout')
    <x-navbar />
    <div class="container">
        <form action="/admin/ticket" method="get">
            <div class="row mt-3">
                {{ csrf_field() }}
                @method('PUT')
                <h5>Filter :</h5>
                <div class="col-12 col-md-4 mt-2 mt-md-0">
                    <select class="form-select" aria-label="Default select example" name="priority" required>
                        @foreach ($priorities as $priority)
                            <option value={{ $priority->id }}>{{ $priority->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-md-4 mt-2 mt-md-0">
                    <select class="form-select" aria-label="Default select example" name="status" required>
                        @foreach ($statues as $status)
                            <option value={{ $status->id }}>{{ $status->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-md-4 mt-2 mt-md-0">
                    <select class="form-select" aria-label="Default select example" name="category" required>
                        <option value="Sarana dan Prasana">Sarana dan Prasana</option>
                        <option value="Jaringan Kampus">Jaringan Kampus</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Email">Email</option>
                        <option value="Keamanan">Keamanan</option>
                    </select>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>

        <div class="row mt-3">
            <form action="/admin/ticket" method="get">
                {{ csrf_field() }}
                @method('PUT')
                <label for="">Filter :</label>
                <div class="mt-3">
                    <select class="form-select" aria-label="Default select example" name="priority" required>
                        @foreach ($priorities as $priority)
                            <option value={{ $priority->id }}>{{ $priority->title }}</option>
                        @endforeach
                    </select>
                    <select class="form-select" aria-label="Default select example" name="status" required>
                        @foreach ($statues as $status)
                            <option value={{ $status->id }}>{{ $status->title }}</option>
                        @endforeach
                    </select>
                    <select class="form-select" aria-label="Default select example" name="category" required>
                        <option value="Sarana dan Prasana">Sarana dan Prasana</option>
                        <option value="Jaringan Kampus">Jaringan Kampus</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Email">Email</option>
                        <option value="Keamanan">Keamanan</option>
                    </select>
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="row mt-3">
            @foreach ($tickets as $ticket)
                <a href="/admin/ticket/detail/{{ $ticket->id }}" style="text-decoration: none;">
                    <x-card>
                        {{ $ticket->title }}
                    </x-card>
                </a>
            @endforeach
        </div>
    </div>
@endsection

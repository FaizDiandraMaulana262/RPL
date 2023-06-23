@extends('layouts.default')

@section('layout')
    <x-navbar />


    @foreach ($tickets as $ticket)
        <div class="container mt-3 mb-3">
            <div class="row mb-3">
                <a href="/detail/{{$ticket->id}}" style="text-decoration: none">
                    <x-card>
                        <h5>{{ $ticket->title }} | {{ $ticket->category }}</h5>
                        <p>{{ $ticket->status }}</p>
                        <div class="mt-3">
                            <p>{{ $ticket->created_at }}</p>
                        </div>
                    </x-card>
                </a>
            </div>
        </div>
    @endforeach
@endsection

@extends('layouts.default')

@section('layout')
<x-navbar />
<div class="container">
    <div class="row mt-3">
        @foreach ($tickets as $ticket)
            <a href="/admin/ticket/detail/{{$ticket->id}}" style="text-decoration: none;">
                <x-card>
                    {{ $ticket->title }}
                </x-card>
            </a>
        @endforeach
    </div>
</div>
@endsection

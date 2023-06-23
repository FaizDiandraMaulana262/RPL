@extends('layouts.default')

@section('layout')
<x-navbar />
<div class="container">
    <div class="row mt-3">
        @foreach ($knowledges as $knowledge)
            <a href="detail/{{$knowledge->id}}" style="text-decoration: none">
                <x-card>
                    <h5>
                        {{ $knowledge->title }}
                    </h5>
                    <p>Kategori : {{ $knowledge->category }}</p>
                </x-card>
            </a>
        @endforeach
    </div>
</div>
@endsection

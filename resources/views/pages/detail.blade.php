@extends('layouts.default')

@section('layout')
<x-navbar />
<div class="container">
    <div class="row mt-3">
        @foreach ($details as $detail)
            <x-card>
                <div class="mt-2">
                    <h1>{{ $detail->title }}</h1>
                    <hr>
                </div>
                <div class="mt-3">
                    <b>
                        {{ $detail->nama }}
                    </b>
                    <p>
                        {{ $detail->description }}
                    </p>
                </div>
                <div class="mt-2">
                    <b>{{ $detail->status }}</b>
                </div>
                <div class="mt-1">
                    <p>{{ $detail->created_at }}</p>
                </div>
                @foreach ($responders as $respoder)
                    <div class="col mt-5">
                        <x-card>
                            <div class="mt-b">
                                <b>{{ $respoder->nama }}</b>
                                <p>{{ $respoder->message }}</p>
                            </div>
                            <p>{{ $respoder->created_at }}</p>
                        </x-card>
                    </div>
                @endforeach
            </x-card>
        @endforeach
    </div>
</div>
@endsection

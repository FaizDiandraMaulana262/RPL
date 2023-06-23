@extends('layouts.default')

@section('layout')
    <x-navbar />
    <div class="container">
        <div class="row mt-3">
            {{-- @foreach ($details as $detail) --}}
                <x-card>
                    <div class="mt-2">
                        <h1>{{ $details[0]->title }}</h1>
                        <hr>
                    </div>
                    <div class="mt-3">
                        <b>
                            {{ $details[0]->nama }}
                        </b>
                        <p>
                            {{ $details[0]->description }}
                        </p>
                    </div>
                    <div class="mt-2">
                        <b>{{ $details[0]->status }}</b>
                    </div>
                    <div class="mt-1">
                        <p>{{ $details[0]->created_at }}</p>
                    </div>
                    @foreach ($responders as $respoder)
                        <div class="col mt-3">
                            <x-card>
                                <div class="mt-2">
                                    <b>{{ $respoder->nama }}</b>
                                    <p>{{ $respoder->message }}</p>
                                </div>
                                <p>{{ $respoder->created_at }}</p>
                            </x-card>
                        </div>
                    @endforeach
                </x-card>

                @if ($details[0]->user_id == auth()->user()->id)
                    <div class="row mb-3">
                        <form action="/admin/ticket/update/{{ $details[0]->id }}/{{ auth()->user()->id }}" method="POST">
                            {{ csrf_field() }}
                            @method('PUT')
                            <input class="visually-hidden" name="priority_id" value={{ $details[0]->priority_id }}>
                            <div class="mt-3">
                                <label lass="form-label">Status</label>
                                <select name="status_id" class="form-select" aria-label="Default select example" required>
                                    <option value=1>Open</option>
                                    <option value=5>Closed</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label lass="form-label">Messages</label>
                                <div class="form-floating">
                                    <textarea name="deskripsi" class="form-control" style="height: 100px" required></textarea>
                                </div>
                            </div>

                            <div class="mt-5">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                @endif
            {{-- @endforeach --}}
        </div>
    </div>
@endsection

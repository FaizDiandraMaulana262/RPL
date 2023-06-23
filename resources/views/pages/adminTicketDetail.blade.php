@extends('layouts.default')

@section('layout')
    <x-navbar />
    <div class="container">
        <div class="row mt-3">
            @foreach ($tickets as $ticket)
                <x-card>
                    <div class="row">
                        <h5>
                            {{ $ticket->title }}
                        </h5>
                        <hr>
                    </div>
                    <div class="row mt-3">
                        @foreach ($userTickets as $userTicket)
                            <b>{{ $userTicket->nama }}</b>
                        @endforeach
                        <p>
                            {{ $ticket->description }}
                        </p>
                    </div>
                    <div class="row mt-3">
                        @foreach ($responseTickets as $responseTicket)
                            <div class="row mb-3">
                                <x-card>
                                    <b>{{ $responseTicket->responder }}</b>
                                    <p class="mt-1">{{ $responseTicket->message }}</p>
                                    <p class="mt-3">{{ $responseTicket->created_at }}</p>
                                </x-card>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-3">
                        @foreach ($statusTickets as $statusTicket)
                            <b>Status : {{ $statusTicket->title }}</b>
                        @endforeach
                        @foreach ($priorityTickets as $priorityTicket)
                            <b>Priority : {{ $priorityTicket->title }}</b>
                        @endforeach
                    </div>
                </x-card>

                <div class="row mb-3">
                    <form action="/admin/ticket/update/{{ $ticket->id }}/{{ auth()->user()->id }}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="mt-3">
                            <label lass="form-label">Priority</label>
                            <select name="priority_id" class="form-select" aria-label="Default select example" required>
                                @foreach ($priorityTickets as $priorityTicket)
                                    <option selected value={{ $priorityTicket->id }}>{{ $priorityTicket->title }}</option>
                                    @foreach ($priorities as $priority)
                                        @if ($priority->title != $priorityTicket->title)
                                            <option value={{ $priority->id }}>{{ $priority->title }}</option>
                                        @endif
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label lass="form-label">Status</label>
                            <select name="status_id" class="form-select" aria-label="Default select example" required>
                                @foreach ($statusTickets as $statusTicket)
                                    <option selected value={{ $statusTicket->id }}>{{ $statusTicket->title }}</option>
                                    @foreach ($statues as $status)
                                        @if ($statusTicket->title != $status->title)
                                            <option value={{ $status->id }}>{{ $status->title }}</option>
                                        @endif
                                    @endforeach
                                @endforeach
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
            @endforeach
        </div>
    </div>
@endsection

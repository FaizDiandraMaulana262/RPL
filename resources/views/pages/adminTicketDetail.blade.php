<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
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
                            <x-card>
                                <b>{{ $responseTicket->responder }}</b>
                                <p class="mt-1">{{ $responseTicket->message }}</p>
                                <p class="mt-3">{{ $responseTicket->created_at }}</p>
                            </x-card>
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

                <form action="">
                    <div class="mt-3">
                        <label lass="form-label">Priority</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>=== Select Priority ===</option>
                            @foreach ($priorities as $priority)
                                <option value="{{ $priority->id }}">{{ $priority->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label lass="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>=== Select Status ===</option>
                            @foreach ($statues as $status)
                                <option value="{{ $status->id }}">{{ $status->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label lass="form-label">Messages</label>
                        <div class="form-floating">
                            <textarea name="deskripsi" class="form-control" style="height: 100px"></textarea>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</body>

</html>

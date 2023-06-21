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
</body>

</html>

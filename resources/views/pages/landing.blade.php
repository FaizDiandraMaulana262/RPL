{{-- @extends('components') --}}
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
            <img class="mx-auto" src="{{url('/assets/logo.png')}}" alt="" style="width: 500px">
        </div>
        <div class="row mt-5">
            <div class="col">
                <h3>Selamat Datang di Helpdesk UMM</h3>
                <p class="mt-2">Website ini digunakan memudahkan masyarakat umm untuk bantuai mengenai masalah yang
                    ada dikampus. <b>Untuk pengajuan tiket</b> kalian bisa kunjungi <a href="ticket">Open Ticket</a></p>
            </div>
        </div>
    </div>
</body>

</html>

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
    <title></title>
</head>

<body>
    <x-navbar />
    <div class="container mt-5">
        <form action="ticket/store" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="kategori" class="form-select" aria-label="Default select example" required>
                    <option selected>=== Pilih Kategori ===</option>
                    <option value="Sarana dan Prasarana">Sarana dan Prasarana</option>
                    <option value="Jaringan Kampus">Jaringan Kampus</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Email">Email</option>
                    <option value="Keamanan">Keamanan</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input id="judul" name="judul" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label lass="form-label">Deskripsi</label>
                <div class="form-floating">
                    <textarea name="deskripsi" class="form-control" style="height: 200px"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>

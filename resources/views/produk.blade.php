<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark px-3 shadow-sm">
        <span class="navbar-brand fw-bold">UTS Laravel</span>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        </ul>
    </div>
</nav>

    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fw-bold">Halaman Produk</h2>
            <a href="/produk/tambah" class="btn btn-primary">Tambah Produk</a>
        </div>

        <table class="table table-bordered" style="background-color: #e6f0ff;">
            <thead class="table-primary">
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Jenis Produk</th>
                    <th>Harga</th>
                </tr>
            </thead>

            <tbody>
                @for ($i = 0; $i < count($produk); $i++)
                    <tr>
                        <td>{{ $produk[$i]['kode'] }}</td>
                        <td>{{ $produk[$i]['nama'] }}</td>
                        <td>{{ $produk[$i]['jenis'] }}</td>
                        <td>{{ $produk[$i]['harga'] }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

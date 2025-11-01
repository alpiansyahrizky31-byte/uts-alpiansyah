<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk</title>

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
                <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">

        <h2 class="fw-bold mb-4">Form Tambah Produk</h2>

        <form>

            <div class="row mb-3">

                <div class="col-md-4">
                    <label class="form-label">Kode Produk</label>
                    <input type="text" class="form-control" placeholder="Input Kode Produk">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" placeholder="Input Nama Produk">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Jenis Produk</label>
                    <input type="text" class="form-control" placeholder="Input Jenis Produk">
                </div>

            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control" placeholder="Input Harga">
            </div>

            <button class="btn btn-success w-100">Simpan</button>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark px-3 shadow-sm">
        <span class="navbar-brand fw-bold">UTS Laravel</span>
    </nav>

    <div class="container mt-4">

        <h2 class="fw-bold">Form Tambah Produk</h2>

        <form>
            <div class="mb-3">
                <label class="form-label">Kode Produk</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Produk</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" class="form-control">
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="/produk" class="btn btn-secondary">Kembali</a>
        </form>

    </div>

</body>
</html>

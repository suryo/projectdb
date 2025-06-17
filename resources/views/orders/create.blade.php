<!DOCTYPE html>
<html>
<head>
    <title>Buat Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Buat Pesanan Baru</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('orders.store') }}">
        @csrf
        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="customer_name" class="form-control">
        </div>
        <div class="mb-3">
            <label>Produk</label>
            <input type="text" name="product" class="form-control">
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="quantity" class="form-control">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" step="0.01" name="price" class="form-control">
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>

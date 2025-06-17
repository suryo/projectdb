<!DOCTYPE html>
<html>
<head>
    <title>SP Order Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Cari Ringkasan Belanja Pelanggan</h2>
    <form method="POST" action="{{ route('order.sp.result') }}">
        @csrf
        <div class="mb-3">
            <label for="customer_name" class="form-label">Nama Pelanggan</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Lihat Ringkasan</button>
    </form>
</div>
</body>
</html>

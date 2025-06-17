<!DOCTYPE html>
<html>
<head>
    <title>Ringkasan Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Ringkasan untuk: {{ $customerName }}</h2>

    @if (count($data))
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Total Pesanan</th>
                <th>Total Barang</th>
                <th>Total Belanja</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->customer_name }}</td>
                    <td>{{ $row->total_orders }}</td>
                    <td>{{ $row->total_items }}</td>
                    <td>Rp {{ number_format($row->total_spent, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p class="text-danger">Tidak ditemukan data untuk pelanggan ini.</p>
    @endif
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        $totalOrders = 0;
        $totalItems = 0;
        $totalSpent = 0;
    @endphp
    @foreach ($isitableorder as $item)
        <div>
            <h2>{{ $item->customer_name }}</h2>
            <p>{{ $item->product }}</p>
            <p>{{ $item->quantity }}</p>
            <p>{{ $item->price }}</p>
            @php
                $totalOrders += 1;
                $totalItems += $item->quantity;
                $totalSpent += $item->price * $item->quantity;
            @endphp
        </div>
        <hr>

    @endforeach

    <div>
        <h2>Total Summary</h2>
        <p>Total Orders: {{ $totalOrders }}</p>
        <p>Total Items: {{ $totalItems }}</p>
        <p>Total Spent: {{ $totalSpent }}</p>
</body>
</html>

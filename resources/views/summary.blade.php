<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($summary as $item)
        <div>
            <h2>{{ $item->customer_name }}</h2>
            <p>{{ $item->total_orders }}</p>
            <p>{{ $item->total_items }}</p>
            <p>{{ $item->total_spent }}</p>
        </div>
        <hr>

    @endforeach
</body>
</html>

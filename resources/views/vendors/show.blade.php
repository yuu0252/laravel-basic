<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{ $vendor->vendor_name }}の商品一覧</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>商品名</th>
            <th>価格</th>
            <th>作成日時</th>
            <th>更新日時</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->created_ar }}</td>
            <td>{{ $product->updated_at }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>
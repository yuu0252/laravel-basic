<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>商品登録</h1>

    @if($errors->any())
    <div>
        <u>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </u>
    </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <th>商品名</th>
                <td>
                    <input type="text" name="product_name">
                </td>
            </tr>
            <tr>
                <th>価格</th>
                <td>
                    <input type="number" name="price">
                </td>
            </tr>
            <tr>
                <th>仕入れ先コード</th>
                <td>
                    <select name="vendor_code">
                        <option selected value="">選択してください</option>
                        @foreach ($vendor_codes as $vendor_code)
                        <option value="{{ $vendor_code }}">{{ $vendor_code }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="登録">
    </form>
</body>

</html>
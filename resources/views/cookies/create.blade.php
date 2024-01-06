<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>商品選択</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('cookies.store')}}" method="POST">
        @csrf
        <select name="product_id">
            <option value="" disabled selected>選択してください</option>
            @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->product_name }}</option>
            @endforeach
        </select>
        <input type="submit" value="カートに入れる">
    </form>
</body>

</html>
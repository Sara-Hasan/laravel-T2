@extends('masterpage')
@section('content')
    <div class="container my-5 w-50 p-5">
<table class="table ">
    <thead>
    <tr>
        <th scope="col" td class="table-success" style="text-align: center">First</th>
        <th scope="col" class="table-success" style="text-align: center">Last</th>
        <th scope="col" class="table-success" style="text-align: center">Handle</th>
    </tr>
    </thead>
    @foreach ($productsArr as $product)
    <tbody>

    <tr>
        <td class="table-primary" style="text-align: center">{{$product['name']}}</td>
        <td class="table-primary" style="text-align: center">{{$product['price']}}</td>
        <td class="table-primary" style="text-align: center">{{$product['weight']}}</td>
    </tr>

    @endforeach
    </tbody>
</table>
    </div>
@endsection
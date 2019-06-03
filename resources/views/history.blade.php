@extends('layout')

@section('content')
    <div class="container" style="background:white">
        <img src="https://ambenitez.com/wp-content/uploads/2018/03/fotografia-deportiva-profesional-futbol.jpg" alt="imagen" class="rounded" style="width:100%; height:500px;" >
        <p></p>
        <h1>Productos de la tienda</h1>
        <p></p>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Descuento de venta</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)
                        <tr>
                            <td>{{$sale->id}}</td>
                            <td>{{$sale->sale_date}}</td>
                            <td>{{$sale->sale_discount}}</td>
                            <td>{{$sale->quantity}}</td>
                            <td>{{($sale->product_price * $sale->quantity) - $sale->sale_discount }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

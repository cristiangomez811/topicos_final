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
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->stock}}</td>
                            <td>
                                <a  class="btn btn-primary"  href="{{route('products.show',$product->id)}}">Ver mas</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

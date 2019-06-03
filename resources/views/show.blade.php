@extends('layout')

@section('content')
    <div class="container" style="background:white">
        <img src="https://ambenitez.com/wp-content/uploads/2018/03/fotografia-deportiva-profesional-futbol.jpg" alt="imagen" class="rounded" style="width:100%; height:500px;" >
        <p></p>
        <h1>Detalles de {{$product->name}}</h1>
        <p></p>
        <div class="container">
            <form action="{{route('sales.store')}}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Precio $</span>
                    </div>
                    <input type="text" class="form-control" value="{{$product->price}}" aria-label="Amount (to the nearest dollar)" disabled>
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                    </div>
                    <input type="text" class="form-control" value="{{$product->name}}" aria-label="Default" aria-describedby="inputGroup-sizing-default" disabled>
                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">Stock</span>
                </div>
                <input type="number" class="form-control" value="{{$product->stock}}" id="basic-url" aria-describedby="basic-addon3" disabled>
                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">Cantidad</span>
                </div>
                <input type="number" class="form-control" value="1" name="quantity" id="basic-url" aria-describedby="basic-addon3" >
                </div>

                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Descuento de producto $</span>
                        </div>
                        <input type="text" class="form-control" name="product_discount" value="0" aria-label="Amount (to the nearest dollar)" >
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                </div>

                <br>

                <button class="btn btn-primary" type="submit">Comprar</button>

                <p></p>
                <br>
            </form>
        </div>
    </div>


@endsection

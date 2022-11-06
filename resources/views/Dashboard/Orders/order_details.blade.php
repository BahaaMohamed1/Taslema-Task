@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1><b>Order Details</b></h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-5 text-start">
                <h3><b>Customer Info</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6 text-start">
                <div class="card">
                    <div class="row">
                        <div class="col-12">Name: {{$order->customer->name}}</div>
                        <div class="col-12">Email: {{$order->customer->email}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h3><b>Order Items</b></h3>
            </div>
        </div>
        <div class="row mt-3">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->product->name}}</td>
                        <td>{{$item->product->price}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->product->price * $item->quantity}}</td>
                        <td>
                            <form action="{{route('orderItemDelete',$item->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

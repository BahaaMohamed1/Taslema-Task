@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Customer Name</th>
                        <th>Date</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->customer->name}}</td>
                            <td>{{$order->created_at}}</td>
                            <td><a href="{{route('orderDetails',$order->id)}}">View Order Details</a></td>
                            <td>
                                <form action="{{route('orderDelete',$order->id)}}" method="post">
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
        <div class="row justify-content-center">
            <div class="col-4">
                {{$orders->links()}}
            </div>
        </div>
    </div>
@endsection

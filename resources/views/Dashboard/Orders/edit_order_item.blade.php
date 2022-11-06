@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5 text-center">
                <h1><b>Edit Order Item</b></h1>
            </div>
        </div>
        <br><br>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{route('orderItemUpdate',$orderItem->id)}}" method="post">
            @method('patch')
            @csrf
            <div class="row">
                <div class="col-1">
                    <label for="">Quantity</label>
                </div>
                <div class="col-2">
                    <input class="form-control" name="quantity" type="text" value="{{$orderItem->quantity}}">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection

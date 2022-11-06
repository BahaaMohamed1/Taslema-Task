@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('calculate')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-1">
                    <label>Array</label>
                </div>
                <div class="col-3">
                    <input class="form-control" type="text" placeholder="example: 1,2,3,-4,-5,-6,7,8" name="array" id="">
                </div>
                <div class="col-3">
                    <input type="submit" value="Calculate" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection
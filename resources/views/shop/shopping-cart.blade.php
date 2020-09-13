@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('cart'))

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Count</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row"> <span class="badge">{{ $product['qty'] }}</span></th>
      <td>{{ $product['item']['title'] }}</td>
      <td>{{ $product['price']}}</td>
      <td><button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button></td>
    </tr>
    @endforeach 
  </tbody>
</table>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <strong> Total: {{ $totalPrice }}</strong>
            </div>
        </div> 
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a href="/checkout" type="button" class="btn btn-success">Check Out</a>
            </div>
        </div>    
    @else  
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <h2>No Items in Cart!</h2>
            </div>
        </div>   
    @endif
</div>
@endsection

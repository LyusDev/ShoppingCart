@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
      <h1>Check Out</h1>
      <h4>Total: ${{ $total }}</h4>
      <form action="/checkout" method="post" id="checkout-form">
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="name" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
               <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="address" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="form-group">
                <label for="card-name">Card Holder Name</label>
                <input type="text" class="form-control" id="card-name" placeholder="card-name" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-12">  
              <div class="form-group">
                <label for="card-number">Creddit Card Number</label>
                <input type="text" class="form-control" id="card-number" placeholder="card-number" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
               <div class="form-group">
                <label for="card-expiry-month">Expiration Month</label>
                <input type="text" class="form-control" id="card-expiry-month" placeholder="card-expiry-month" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
               <div class="form-group">
                <label for="card-expiry-year">Expiration Year</label>
                <input type="text" class="form-control" id="card-expiry-year" placeholder="card-expiry-year" required>
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
             <div class="form-group">
              <label for="card-cvc">CVC</label>
              <input type="text" class="form-control" id="card-cvc" placeholder="card-cvc" required>
            </div>
           </div>
          </div>
          @csrf
          <button type="button" class="btn btn-success">Buy Now</button>
      </form>
    </div>
  </div>
</div>
@endsection
  
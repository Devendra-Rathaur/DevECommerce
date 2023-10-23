@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
        <table class="table">
  <tbody>
    <tr>
      <td>Amount</td>
      <td>{{$total}}</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>0</td>
    </tr>
    <tr>
      <td>Delivery Charge</td>
      <td>$ 5</td>
    </tr>
    <tr>
      <td>Total Payable</td>
      <td>$ {{$total+5}}</td>
    </tr>
  </tbody>
</table>
        </div>
        <div class="payment-container">
        <form action="/orderplace" method="POST">
          @csrf
      <div class="mb-3">
       <textarea name="address" id="" cols="100" rows="3" placeholder="Enter Your address"></textarea>
           </div>
           <div class="mb-3">
             <label for="payment">Select Payment Method</label><br>
             <input value="cash" type="radio" name="payment" id=""> <span>Net Banking / UPI</span><br>
             <input value="cash" type="radio" name="payment" id=""> <span>Credit Card / Debit Card</span><br>
             <input value="cash" type="radio" name="payment" id=""> <span>EMI</span><br>
           </div>
           <button type="submit" class="btn btn-success">Pay Now</button>
         </form>
        </div>
    </div>
@endsection

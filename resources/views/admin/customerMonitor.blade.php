@extends('layout.app')

@section('contents')



<div class="pt-5 container">


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>

  @foreach($customers as $customer)
    <tr>
      <th scope="row">{{$customer->customer_id}}</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->phone}}</td>
    </tr>


 @endforeach
  </tbody>
</table>


</div>

@endsection
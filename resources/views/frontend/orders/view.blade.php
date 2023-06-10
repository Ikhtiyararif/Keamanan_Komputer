@extends('layouts.front')
@section('title')
 Order View
@endsection
@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4>Order view
                        <span class="float-end"><a href="{{ url('my-orders') }}" class="btn border-primary bg-white">Back</a></span>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-details">
                            <h4>Shipping Details</h4> <hr>
                            <label for="">First Name</label>
                            <div class="border p-2">{{ $orders->fname }}</div>
                            <label for="">Last Name</label>
                            <div class="border p-2">{{ $orders->lname }}</div>
                            <label for="">Email</label>
                            <div class="border p-2">{{ $orders->email }}</div>
                            <label for="">Phone Number</label>
                            <div class="border p-2">{{ $orders->phone }}</div>
                            <label for="">Shipping Address</label>
                            <div class="border p-2">
                                Address1: {{ $orders->address1 }} <br>
                                Address2: {{ $orders->address2 }} <br>
                                City: {{ $orders->city }} <br>
                                {{ $orders->state }},
                                {{ $orders->country }}
                            </div>
                            <label for="">Pincode</label>
                            <div class="border p-2">{{ $orders->pincode }}</div>
                        </div>
                        <div class="col-md-6">
                        <h4>Order Details</h4> <hr>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderitems as $item)
                                    <tr>
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ $item->qty }}</td>
                                        <td>Rp.{{ $item->price }}</td>
                                        <td>
                                            <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px" alt="Product Image">
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h4 class="px-2">Total:<span class="float-end">Rp.{{ $orders->total_price }}</span></h4>
                            <p class="px-2">Note: Transfer payment to the following account number, also include your order number. <br>
                               <b>On behalf of Milaif 7890-3345</b></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
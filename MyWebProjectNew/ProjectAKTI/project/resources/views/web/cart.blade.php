@extends('web.webmaster')
@section('Content')


@php
    $subtotal=0;
@endphp

@foreach ((array) session('cart') as $id => $details )
@php
    $subtotal+= $details['quantity'] * $details['price'];
@endphp
@endforeach





    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{asset('webb/index')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Article</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>

                        </tr>
                    </thead>
                    <tbody class="align-middle">


                        @if(session('cart'))
                        @foreach ((array) session('cart') as $id => $details)
                        <tr>


                            <td >
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('uploads/products/'.$details['image']) }}"
                                        class="img-fluid me-5" style="width: 80px; height: 80px;"
                                        alt="">

                                </div>
                            </td>

                            <td class="align-middle">{{$details['name']}}</td>
                            <td class="align-middle">{{$details['price']}}&nbsp;Rs</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button onclick="" class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value={{$details['quantity']}}>
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus" onclick={{$details['quantity']-1,}}>
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">{{$details['price']*$details['quantity']}}&nbsp;Rs/-</td>
                            <td class="align-middle">
                                <a href="{{ route('wremovecart', $id) }}"
                                            class="btn btn-md rounded-circle bg-light border mt-4">
                                            <i class="fa fa-times text-danger"></i>
                                        </a>


                            </td>

                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">

                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">{{$subtotal}}&nbsp;Rs/-</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Tax</h6>
                            @php
                                $tax=($subtotal*18)/100;
                            @endphp
                            <h6 class="font-weight-medium">{{$tax}}&nbsp;Rs/-</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">{{$tax+$subtotal}}&nbsp;PKR</h5>
                        </div>
                        <a href="{{route('wcheckout')}}" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


@endsection

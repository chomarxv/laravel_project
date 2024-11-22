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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4" >
                    <h4 style="height:54px; padding-top:13px; " class="text-center bg-secondary border-0  font-weight-semi-bold mb-4">Billing Address</h4>
                   <form action="{{route('wplaceorder')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input name ="firstname" class="form-control" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input name ="lastname"class="form-control" type="text" placeholder="Doe">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input name ="email"class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input name ="mobile"class="form-control" type="text" placeholder="+123 456 789">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address</label>
                            <input name ="address"class="form-control" type="text" placeholder="123 Street">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <input name ="country" class="form-control" type="text" placeholder="Your Country">

                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input name ="city" class="form-control" type="text" placeholder="New York">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input name ="zipcode" class="form-control" type="text" placeholder="123">
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="text-center font-weight-semi-bold m-0">Order Total</h4>
                    </div>

                <div class="d-flex">
                    <div class="card-body">
                        <div class="d-flex justify-content-start">
                            <h5 class="d-flex font-weight-medium mb-3">Products</h5>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-mid">
                            <h5 class="d-flex font-weight-medium mb-3">Quantity</h5>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                         <div class="d-flex justify-content-end">
                             <h5 class="d-flex font-weight-medium mb-3">Price</h5>
                         </div>
                     </div>
                    </div>
                </div>
                        @foreach ((array) session('cart') as $id => $details)

                    <div class="d-flex justify-content-between">
                        <div class="card-body">
                            <div class="d-flex justify-content-start">
                                <p class="d-flex font-weight-medium mb-3">{{$details['name']}}</p>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <p class="d-flex font-weight-medium mb-3">{{$details['quantity']}}</p>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                             <div class="d-flex justify-content-end">
                                 <p class="d-flex font-weight-medium mb-3">{{$details['price']}}&nbsp;Rs</p>
                             </div>
                         </div>
                        </div>
                    </div>

                        @endforeach

                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="pl-4 font-weight-medium">Subtotal</h6>
                            <h6 class="pr-4 font-weight-medium">{{$subtotal}}&nbsp;Rs</h6>
                        </div>
                        @php
                        $tax=($subtotal*18)/100;
                        $t=$tax+$subtotal;
                        @endphp
                        <div class="d-flex justify-content-between">
                            <h6 class="pl-4 font-weight-medium">Tax</h6>
                            <h6 class="pr-4 font-weight-medium">{{$tax}}&nbsp;Rs</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="pl-2 font-weight-bold">Total</h5>
                            <h5 class="pr-1 font-weight-bold">{{$tax+$subtotal}}&nbsp;PKR/-</h5>
                        </div>

                    </div>
                    <div style="" class="card-footer border-secondary bg-transparent">
                        <button type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
    <!-- Checkout End -->


@endsection

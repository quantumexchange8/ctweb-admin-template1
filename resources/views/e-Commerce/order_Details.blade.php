@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>eCommerce <span>/ Order Details</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30">

        <!--Order Details Head Start-->
        <div class="col-12 mb-30">
            <div class="row mbn-15">
                <div class="col-12 col-md-4 mb-15">
                    <h4 class="text-primary fw-600 m-0">Order ID# MSP40022</h4>
                </div>
                <div class="text-left text-md-center col-12 col-md-4 mb-15"><span>Status: <span class="badge badge-round badge-success">Shipping</span></span></div>
                <div class="text-left text-md-right col-12 col-md-4 mb-15">
                    <p>02 February, 2018</p>
                </div>
            </div>
        </div>
        <!--Order Details Head End-->

        <!--Order Details Customer Information Start-->
        <div class="col-12 mb-30">
            <div class="order-details-customer-info row mbn-20">

                <!--Billing Info Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <h4 class="mb-25">Billing Info</h4>
                    <ul>
                        <li> <span>Name</span> <span>Jonathin doe</span> </li>
                        <li> <span>Country</span> <span>USA</span> </li>
                        <li> <span>Address</span> <span>13/2 Minar St, Sanfrancisco <br>CA 8788 USA.</span> </li>
                        <li> <span>State</span> <span>United Stade</span> </li>
                        <li> <span>City</span> <span>Sanfrancisco</span> </li>
                        <li> <span>Email</span> <span>domain@mail.com</span> </li>
                        <li> <span>Phone</span> <span>+1 022 3665  88</span> </li>
                    </ul>
                </div>
                <!--Billing Info End-->

                <!--Shipping Info Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <h4 class="mb-25">Shipping Info</h4>
                    <ul>
                        <li> <span>Name</span> <span>Jonathin doe</span> </li>
                        <li> <span>Country</span> <span>USA</span> </li>
                        <li> <span>Address</span> <span>13/2 Minar St, Sanfrancisco <br>CA 8788 USA.</span> </li>
                        <li> <span>State</span> <span>United Stade</span> </li>
                        <li> <span>City</span> <span>Sanfrancisco</span> </li>
                        <li> <span>Email</span> <span>domain@mail.com</span> </li>
                        <li> <span>Phone</span> <span>+1 022 3665  88</span> </li>
                    </ul>
                </div>
                <!--Shipping Info End-->

                <!--Purchase Info Start-->
                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <h4 class="mb-25">Purchase Info</h4>
                    <ul>
                        <li> <span>Items</span> <span>03</span> </li>
                        <li> <span>Price</span> <span>$5400.00</span> </li>
                        <li> <span>Shipping</span> <span>$50.00</span> </li>
                        <li> <span>Discount</span> <span>$40.00</span> </li>
                        <li> <span>Total</span> <span>$5410.00</span> </li>
                        <li> <span class="h5 fw-600">Type</span> <span class="h5 fw-600 text-success">Paid</span> </li>
                    </ul>
                </div>
                <!--Purchase Info End-->

            </div>
        </div>
        <!--Order Details Customer Information Start-->

        <!--Order Details List Start-->
        <div class="col-12 mb-30">
            <div class="table-responsive">
                <table class="table table-bordered table-vertical-middle">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Photo</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quentity</th>
                            <th>ETA Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#MSP40022</td>
                            <td><img src="assets/images/product/list-product-1.jpg" alt="" class="product-image rounded-circle"></td>
                            <td><a href="#">Spro 4 Laptop</a></td>
                            <td>$600.00</td>
                            <td>03 pyc</td>
                            <td>13 Feb 2018</td>
                        </tr>
                        <tr>
                            <td>#MSP40023</td>
                            <td><img src="assets/images/product/list-product-2.jpg" alt="" class="product-image rounded-circle"></td>
                            <td><a href="#">Spro 4 Laptop</a></td>
                            <td>$600.00</td>
                            <td>03 pyc</td>
                            <td>13 Feb 2018</td>
                        </tr>
                        <tr>
                            <td>#MSP40024</td>
                            <td><img src="assets/images/product/list-product-3.jpg" alt="" class="product-image rounded-circle"></td>
                            <td><a href="#">Spro 4 Laptop</a></td>
                            <td>$600.00</td>
                            <td>03 pyc</td>
                            <td>13 Feb 2018</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Order Details List End-->

    </div>

</div>
@endsection
@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>eCommerce <span>/ Order List</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Order List Start-->
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-vertical-middle">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Photo</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quentity</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#MSP40022</td>
                            <td>Sean Oliver</td>
                            <td><img src="assets/images/product/list-product-1.jpg" alt="" class="product-image rounded-circle"></td>
                            <td><a href="#">Spro 4 Laptop</a></td>
                            <td>$600.00</td>
                            <td>03 pyc</td>
                            <td>13 Feb 2018</td>
                            <td><span class="badge badge-danger">Due</span></td>
                            <td class="action h4">
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/order_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#MSP40023</td>
                            <td>Blanka Mokroš</td>
                            <td><img src="assets/images/product/list-product-2.jpg" alt="" class="product-image rounded-circle"></td>
                            <td><a href="#">Spro 4 Laptop</a></td>
                            <td>$600.00</td>
                            <td>03 pyc</td>
                            <td>13 Feb 2018</td>
                            <td><span class="badge badge-success">Paid</span></td>
                            <td class="action h4">
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/order_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#MSP40024</td>
                            <td>Rostás Linda</td>
                            <td><img src="assets/images/product/list-product-3.jpg" alt="" class="product-image rounded-circle"></td>
                            <td><a href="#">Spro 4 Laptop</a></td>
                            <td>$600.00</td>
                            <td>03 pyc</td>
                            <td>13 Feb 2018</td>
                            <td><span class="badge badge-danger">Due</span></td>
                            <td class="action h4">
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/order_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#MSP40025</td>
                            <td>Jana Valenta</td>
                            <td><img src="assets/images/product/list-product-4.jpg" alt="" class="product-image rounded-circle"></td>
                            <td><a href="#">Spro 4 Laptop</a></td>
                            <td>$600.00</td>
                            <td>03 pyc</td>
                            <td>13 Feb 2018</td>
                            <td><span class="badge badge-success">Paid</span></td>
                            <td class="action h4">
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/order_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#MSP40026</td>
                            <td>Tiêu Bích</td>
                            <td><img src="assets/images/product/list-product-5.jpg" alt="" class="product-image rounded-circle"></td>
                            <td><a href="#">Spro 4 Laptop</a></td>
                            <td>$600.00</td>
                            <td>03 pyc</td>
                            <td>13 Feb 2018</td>
                            <td><span class="badge badge-success">Paid</span></td>
                            <td class="action h4">
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/order_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Order List End-->

    </div>

</div>
@endsection
@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>eCommerce <span>/ Invoice List</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30">

        <!--Alert Start-->
        <div class="col-12 mb-30">
            <div class="alert alert-primary">
                <button class="close" data-dismiss="alert"><i class="zmdi zmdi-close"></i></button>
                <i class="zmdi zmdi-alert-polygon"></i> This page has been enhanced for download. Click the print button at the bottom of the invoice to <a href="#" class="alert-link">download.</a>
            </div>
        </div>
        <!--Alert End-->

        <!-- Invoice List Start -->
        <div class="col-12 mb-30">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">

                    <!-- Table Head Start -->
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Date</th>
                            <th>Invoice ID</th>
                            <th>Order No</th>
                            <th>Customer</th>
                            <th>Due</th>
                            <th>Balance</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead><!-- Table Head End -->

                    <!-- Table Body Start -->
                    <tbody>
                        <tr>
                            <td>#01</td>
                            <td>11 March 2022</td>
                            <td>IAD-101</td>
                            <td>SPRO-128715</td>
                            <td>Tyler Meyer</td>
                            <td>20 April 2022</td>
                            <td>$575185</td>
                            <td>$266452</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#02</td>
                            <td>12 March 2022</td>
                            <td>IAD-102</td>
                            <td>SPRO-129645</td>
                            <td>Kathryn Hall</td>
                            <td>24 April 2022</td>
                            <td>$475185</td>
                            <td>$365452</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#03</td>
                            <td>13 March 2022</td>
                            <td>IAD-103</td>
                            <td>SPRO-164715</td>
                            <td>Ronald Murray</td>
                            <td>22 April 2022</td>
                            <td>$945185</td>
                            <td>$354452</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#04</td>
                            <td>14 March 2022</td>
                            <td>IAD-104</td>
                            <td>SPRO-251554</td>
                            <td>Martha Henry</td>
                            <td>28 April 2022</td>
                            <td>$512585</td>
                            <td>$456452</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#05</td>
                            <td>15 March 2022</td>
                            <td>IAD-105</td>
                            <td>SPRO-134715</td>
                            <td>Dylan Dixon</td>
                            <td>02 May 2022</td>
                            <td>$635185</td>
                            <td>$524652</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#06</td>
                            <td>16 March 2022</td>
                            <td>IAD-106</td>
                            <td>SPRO-128715</td>
                            <td>Daniel Reed</td>
                            <td>20 April 2022</td>
                            <td>$12552</td>
                            <td>$2584</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#07</td>
                            <td>17 March 2022</td>
                            <td>IAD-107</td>
                            <td>SPRO-128717</td>
                            <td>Henry Aguilar</td>
                            <td>10 May 2022</td>
                            <td class="balance">3575185</td>
                            <td>$166452</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#08</td>
                            <td>18 March 2022</td>
                            <td>IAD-108</td>
                            <td>SPRO-128115</td>
                            <td>Henry Willis</td>
                            <td>07 May 2022</td>
                            <td>$746185</td>
                            <td>$561452</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#09</td>
                            <td>19 March 2022</td>
                            <td>IAD-109</td>
                            <td>SPRO-128786</td>
                            <td>Emily Barnes</td>
                            <td>12 April 2022</td>
                            <td>$115185</td>
                            <td>$106452</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#10</td>
                            <td>22 March 2022</td>
                            <td>IAD-110</td>
                            <td>SPRO-128325</td>
                            <td>Juan Patel</td>
                            <td>20 April 2022</td>
                            <td>$573215</td>
                            <td>$376452</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#11</td>
                            <td>25 March 2022</td>
                            <td>IAD-111</td>
                            <td>SPRO-121615</td>
                            <td>Wayne Bell</td>
                            <td>27 April 2022</td>
                            <td>$315185</td>
                            <td>$212552</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#12</td>
                            <td>01 April 2022</td>
                            <td>IAD-112</td>
                            <td>SPRO-128715</td>
                            <td>Doris Wong</td>
                            <td>03 May 2022</td>
                            <td>$158251</td>
                            <td>$98252</td>
                            <td>
                                <div class="table-action-buttons">
                                    <a class="view button button-box button-xs button-primary" href="/invoice_Details"><i class="zmdi zmdi-more"></i></a>
                                    <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                    <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody><!-- Table Body End -->

                </table>
            </div>
        </div><!-- Invoice List End -->

    </div>

</div>
@endsection
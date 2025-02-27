@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Form <span>/ Date & Mask</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Date Range Picker Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Date Range Picker</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <!--Single Date Picker-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">Single Date Picker</h6>
                            <input type="text" class="form-control input-date-single">
                        </div>
                        <!--Single Date Picker-->

                        <!--Date Range Picker-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">Date Range Picker</h6>
                            <input type="text" class="form-control input-date">
                        </div>
                        <!--Date Range Picker-->

                        <!--Date Range Picker With Times-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">Date Range Picker With Times</h6>
                            <input type="text" class="form-control input-date-time">
                        </div>
                        <!--Date Range Picker With Times-->

                        <!--Predefined Date Ranges-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">Predefined Date Ranges</h6>
                            <input type="text" class="form-control input-date-predefined">
                        </div>
                        <!--Predefined Date Ranges-->

                        <!--Input Initially Empty-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">Input Initially Empty</h6>
                            <input type="text" class="form-control input-date-empty">
                        </div>
                        <!--Input Initially Empty-->

                    </div>
                </div>
            </div>
        </div>
        <!--Date Range Picker End-->

        <!--How To Use Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;input type="text" class="form-control input-date"&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    $('.input-date').daterangepicker();
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="http://www.daterangepicker.com/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

        <!--Input Mask Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Input Mask</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">ISBN1</h6>
                            <input type="text" class="form-control" data-mask="999-99-999-9999-9">
                            <span class="form-help-text">e.g "999-99-999-9999-9"</span>
                        </div>
                        <!--Form Field-->

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">ISBN2</h6>
                            <input type="text" class="form-control" data-mask="999 99 999 9999 9">
                            <span class="form-help-text">e.g "999 99 999 9999 9"</span>
                        </div>
                        <!--Form Field-->

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">ISBN3</h6>
                            <input type="text" class="form-control" data-mask="999/99/999/9999/9">
                            <span class="form-help-text">e.g "999/99/999/9999/9"</span>
                        </div>
                        <!--Form Field-->

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">IPV4</h6>
                            <input type="text" class="form-control" data-mask="999.999.999.999">
                            <span class="form-help-text">e.g "192.168.110.310"</span>
                        </div>
                        <!--Form Field-->

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">IPV6</h6>
                            <input type="text" class="form-control" data-mask="9999:9999:9999:9:999:9999:9999:9999">
                            <span class="form-help-text">e.g "4deg:1340:6547:2:540:h8je:ve73:98pd"</span>
                        </div>
                        <!--Form Field-->

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">Tax ID</h6>
                            <input type="text" class="form-control" data-mask="99-9999999">
                            <span class="form-help-text">e.g "99-9999999"</span>
                        </div>
                        <!--Form Field-->

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">Phone</h6>
                            <input type="text" class="form-control" data-mask="(999) 999-9999">
                            <span class="form-help-text">e.g "(999) 999-9999"</span>
                        </div>
                        <!--Form Field-->

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">Currency</h6>
                            <input type="text" class="form-control" data-mask="$ 999,999,999.99">
                            <span class="form-help-text">e.g "$ 999,999,999.99"</span>
                        </div>
                        <!--Form Field-->

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">Date</h6>
                            <input type="text" class="form-control" data-mask="99/99/9999">
                            <span class="form-help-text">e.g "dd/mm/yyyy"</span>
                        </div>
                        <!--Form Field-->

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">
                            <h6 class="mb-15">Date2</h6>
                            <input type="text" class="form-control" data-mask="99-99-9999">
                            <span class="form-help-text">e.g "dd-mm-yyyy"</span>
                        </div>
                        <!--Form Field-->

                    </div>
                </div>
            </div>
        </div>
        <!--Input Mask End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;input type="text" class="form-control" data-mask="999-99-999-9999-9"&gt;
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="http://www.jasny.net/bootstrap/3.2.0/javascript/#inputmask">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
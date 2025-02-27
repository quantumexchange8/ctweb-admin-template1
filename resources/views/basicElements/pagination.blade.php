@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Pagination</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Basic Example Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Basic Example</h4>
                </div>
                <div class="box-body">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Basic Example End-->

        <!--Next Prev Icons Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Next Prev Icons</h4>
                </div>
                <div class="box-body">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Next Prev Icons End-->

        <!--Disabled and Active States Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Disabled and Active States</h4>
                </div>
                <div class="box-body">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Disabled and Active States End-->

        <!--Sizing Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Sizing</h4>
                </div>
                <div class="box-body">
                    <ul class="pagination pagination-lg mb-10">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>

                    <ul class="pagination mb-10">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>

                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Sizing End-->

        <!--Alignment Center Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Alignment Center</h4>
                </div>
                <div class="box-body">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Alignment Center End-->

        <!--Alignment Right Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Alignment Right</h4>
                </div>
                <div class="box-body">
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Alignment Right End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;ul class="pagination"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;Previous&lt;/a&gt;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;1&lt;/a&gt;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;2&lt;/a&gt;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;3&lt;/a&gt;&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="page-item"&gt;&lt;a class="page-link" href="#"&gt;Next&lt;/a&gt;&lt;/li&gt;<br />&lt;/ul&gt;
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/5.2/components/pagination/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
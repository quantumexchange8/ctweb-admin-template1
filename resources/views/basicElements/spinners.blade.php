@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Spinners</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Border Spinner Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Border Spinner</h4>
                </div>
                <div class="box-body">
                    <div class="spinner-border">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <!--Border Spinner End-->

        <!--Border Spinner Color Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Border Spinner Color</h4>
                </div>
                <div class="box-body">
                    <div class="spinner-border text-primary">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-secondary">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-success">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-danger">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-warning">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-info">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-body-light">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border text-heading">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <!--Border Spinner Color End-->

        <!--Growing Spinner Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Growing Spinner</h4>
                </div>
                <div class="box-body">
                    <div class="spinner-grow">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <!--Growing Spinner End-->

        <!--Growing Spinner Color Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Growing Spinner Color</h4>
                </div>
                <div class="box-body">
                    <div class="spinner-grow text-primary">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-secondary">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-success">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-danger">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-warning">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-info">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-body-light">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow text-heading">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
        <!--Growing Spinner Color End-->

        <!--Alignment Center Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Alignment Center</h4>
                </div>
                <div class="box-body">
                    <div class="d-flex justify-content-center">
                        <div class="spinner-border">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
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
                    <div class="d-flex justify-content-end">
                        <div class="spinner-border">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Alignment Right End-->

        <!--Sizes Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Sizes</h4>
                </div>
                <div class="box-body">
                    <div class="d-flex align-items-center">
                        <div class="spinner-border spinner-lg">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-border">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-border spinner-sm">
                            <span class="sr-only">Loading...</span>
                        </div>

                        <div class="spinner-grow spinner-lg">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow spinner-sm">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Sizes End-->

        <!--Button Start-->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Button</h4>
                </div>
                <div class="box-body">
                    <button class="button button-box button-primary"><span class="spinner-border spinner-sm d-inline-block"></span><span>Loading...</span></button>
                    <button class="button button-primary"><span class="spinner-border spinner-sm d-inline-block mr-5"></span><span>Loading...</span></button>
                    <button class="button button-box button-primary"><span class="spinner-grow spinner-sm d-inline-block"></span><span>Loading...</span></button>
                    <button class="button button-primary"><span class="spinner-grow spinner-sm d-inline-block mr-5"></span><span>Loading...</span></button>
                </div>
            </div>
        </div>
        <!--Button End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;div class="spinner-border"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;<br />&lt;/div&gt;
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/5.2/components/spinners/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
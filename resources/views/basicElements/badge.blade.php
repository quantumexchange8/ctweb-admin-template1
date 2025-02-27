@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Badge</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Contextual Variations Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Contextual Variations</h4>
                </div>
                <div class="box-body">
                    <span class="badge badge-primary">primary</span>
                    <span class="badge badge-secondary">secondary</span>
                    <span class="badge badge-success">success</span>
                    <span class="badge badge-danger">danger</span>
                    <span class="badge badge-warning">warning</span>
                    <span class="badge badge-info">info</span>
                    <span class="badge badge-dark">dark</span>
                </div>
            </div>
        </div>
        <!--Contextual Variations End-->

        <!--Pill Badge Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Pill Badge</h4>
                </div>
                <div class="box-body">
                    <span class="badge badge-pill badge-primary">primary</span>
                    <span class="badge badge-pill badge-secondary">secondary</span>
                    <span class="badge badge-pill badge-success">success</span>
                    <span class="badge badge-pill badge-danger">danger</span>
                    <span class="badge badge-pill badge-warning">warning</span>
                    <span class="badge badge-pill badge-info">info</span>
                    <span class="badge badge-pill badge-dark">dark</span>
                </div>
            </div>
        </div>
        <!--Pill Badge End-->

        <!--Outline Badge Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Outline Badge</h4>
                </div>
                <div class="box-body">
                    <span class="badge badge-outline badge-primary">primary</span>
                    <span class="badge badge-outline badge-secondary">secondary</span>
                    <span class="badge badge-outline badge-success">success</span>
                    <span class="badge badge-outline badge-danger">danger</span>
                    <span class="badge badge-outline badge-warning">warning</span>
                    <span class="badge badge-outline badge-info">info</span>
                    <span class="badge badge-outline badge-dark">dark</span>
                </div>
            </div>
        </div>
        <!--Outline Badge End-->

        <!--Link Badge Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Link Badge</h4>
                </div>
                <div class="box-body">
                    <a href="#" class="badge badge-primary">primary</a>
                    <a href="#" class="badge badge-secondary">secondary</a>
                    <a href="#" class="badge badge-success">success</a>
                    <a href="#" class="badge badge-danger">danger</a>
                    <a href="#" class="badge badge-warning">warning</a>
                    <a href="#" class="badge badge-info">info</a>
                    <a href="#" class="badge badge-dark">dark</a>
                </div>
            </div>
        </div>
        <!--Link Badge End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;span class="badge badge-primary"&gt;primary&lt;/span&gt;
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/4.3/components/badge/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
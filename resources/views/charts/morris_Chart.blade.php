@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Charts <span>/ Echarts</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!-- Line Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Line</h4>
                </div>
                <div class="box-body">
                    <div id="example-morris-line" class="example-morris"></div>
                </div>
            </div>
        </div><!-- Line End -->

        <!-- Bar Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Bar</h4>
                </div>
                <div class="box-body">
                    <div id="example-morris-bar" class="example-morris"></div>
                </div>
            </div>
        </div><!-- Bar End -->

        <!-- Area Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Area</h4>
                </div>
                <div class="box-body">
                    <div id="example-morris-area" class="example-morris"></div>
                </div>
            </div>
        </div><!-- Area End -->

        <!-- Donuts Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Donuts</h4>
                </div>
                <div class="box-body">
                    <div id="example-morris-donuts" class="example-morris"></div>
                </div>
            </div>
        </div><!-- Donuts End -->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <p>For Basic use follow the <a class="text-primary" href="https://morrisjs.github.io/morris.js/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
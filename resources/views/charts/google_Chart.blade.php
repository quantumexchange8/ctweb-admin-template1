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
                    <div id="example-google-line" class="example-gchart-line example-gchart"></div>
                </div>
            </div>
        </div><!-- Line End -->

        <!-- Area Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Area</h4>
                </div>
                <div class="box-body">
                    <div id="example-google-area" class="example-gchart-area example-gchart"></div>
                </div>
            </div>
        </div><!-- Area End -->

        <!-- Stepped Area Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Stepped Area</h4>
                </div>
                <div class="box-body">
                    <div id="example-google-sArea" class="example-gchart-sArea example-gchart"></div>
                </div>
            </div>
        </div><!-- Stepped Area End -->

        <!-- Bar Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Bar</h4>
                </div>
                <div class="box-body">
                    <div id="example-google-bar" class="example-gchart-bar example-gchart"></div>
                </div>
            </div>
        </div><!-- Bar End -->

        <!-- Pie Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Pie</h4>
                </div>
                <div class="box-body">
                    <div id="example-google-pie" class="example-gchart-pie example-gchart"></div>
                </div>
            </div>
        </div><!-- Pie End -->

        <!-- Donut Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Donut</h4>
                </div>
                <div class="box-body">
                    <div id="example-google-donut" class="example-gchart-donut example-gchart"></div>
                </div>
            </div>
        </div><!-- Donut End -->

        <!-- Scatter Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Scatter</h4>
                </div>
                <div class="box-body">
                    <div id="example-google-scatter" class="example-gchart-scatter example-gchart"></div>
                </div>
            </div>
        </div><!-- Scatter End -->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <p>For Basic use follow the <a class="text-primary" href="https://developers.google.com/chart/interactive/docs/quick_start">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
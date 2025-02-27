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
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Line</h4>
                </div>
                <div class="box-body">
                    <span class="sparkline-chart example-sparkline-line"></span>
                </div>
            </div>
        </div><!-- Line End -->

        <!-- Line Area Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Line Area</h4>
                </div>
                <div class="box-body">
                    <span class="sparkline-chart example-sparkline-line-area"></span>
                </div>
            </div>
        </div><!-- Line Area End -->

        <!-- Bar Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Bar</h4>
                </div>
                <div class="box-body">
                    <span class="sparkline-chart example-sparkline-bar"></span>
                </div>
            </div>
        </div><!-- Bar End -->

        <!-- Bar & Line Composite Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Bar & Line Composite</h4>
                </div>
                <div class="box-body">
                    <span class="sparkline-chart example-sparkline-bar-line-composite"></span>
                </div>
            </div>
        </div><!-- Bar & Line Composite End -->

        <!-- Tristate Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Tristate</h4>
                </div>
                <div class="box-body">
                    <span class="sparkline-chart example-sparkline-tristate"></span>
                </div>
            </div>
        </div><!-- Tristate End -->

        <!-- Discrete Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Discrete</h4>
                </div>
                <div class="box-body">
                    <span class="sparkline-chart example-sparkline-discrete"></span>
                </div>
            </div>
        </div><!-- Discrete End -->

        <!-- Bullet Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Bullet</h4>
                </div>
                <div class="box-body">
                    <span class="sparkline-chart example-sparkline-bullet"></span>
                </div>
            </div>
        </div><!-- Bullet End -->

        <!-- Pie Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Pie</h4>
                </div>
                <div class="box-body">
                    <span class="sparkline-chart example-sparkline-pie"></span>
                </div>
            </div>
        </div><!-- Pie End -->

        <!-- Box Plots Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Box Plots</h4>
                </div>
                <div class="box-body">
                    <span class="sparkline-chart example-sparkline-box"></span>
                </div>
            </div>
        </div><!-- Box Plots End -->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <p>For Basic use follow the <a class="text-primary" href="https://omnipotent.net/jquery.sparkline/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
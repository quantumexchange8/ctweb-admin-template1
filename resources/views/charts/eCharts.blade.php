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

        <!-- Smoothed Line Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Smoothed Line</h4>
                </div>
                <div class="box-body">
                    <div id="example-echart-smothed-line" class="example-echart-smothed-line example-echarts"></div>
                </div>
            </div>
        </div><!-- Smoothed Line End -->

        <!-- Basic Area Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Basic Area</h4>
                </div>
                <div class="box-body">
                    <div id="example-echart-basic-area" class="example-echart-basic-area example-echarts"></div>
                </div>
            </div>
        </div><!-- Basic Area End -->

        <!-- Step Line Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Step Line</h4>
                </div>
                <div class="box-body">
                    <div id="example-echart-step-line" class="example-echart-step-line example-echarts"></div>
                </div>
            </div>
        </div><!-- Step Line End -->

        <!-- Bar Simple Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Bar Simple</h4>
                </div>
                <div class="box-body">
                    <div id="example-echart-bar-simple" class="example-echart-bar-simple example-echarts"></div>
                </div>
            </div>
        </div><!-- Bar Simple End -->

        <!--  Simple Bar Dataset Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Simple Bar Dataset</h4>
                </div>
                <div class="box-body">
                    <div id="example-echart-bar-dataset" class="example-echart-bar-dataset example-echarts"></div>
                </div>
            </div>
        </div><!--  Simple Bar Dataset End -->

        <!-- Customized Pie Chart Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Customized Pie Chart</h4>
                </div>
                <div class="box-body">
                    <div id="example-echart-pie-chart" class="example-echart-pie-chart example-echarts"></div>
                </div>
            </div>
        </div><!-- Customized Pie Chart End -->

        <!-- Doughnut Chart Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Doughnut Chart</h4>
                </div>
                <div class="box-body">
                    <div id="example-echart-doughnut-chart" class="example-echart-doughnut-chart example-echarts"></div>
                </div>
            </div>
        </div><!-- Doughnut Chart End -->

        <!-- Scatter Simple Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Scatter Simple</h4>
                </div>
                <div class="box-body">
                    <div id="example-echart-scatter-simple" class="example-echart-scatter-simple example-echarts"></div>
                </div>
            </div>
        </div><!-- Scatter Simple End -->

        <!-- Scatter Bubble Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Scatter Bubble</h4>
                </div>
                <div class="box-body">
                    <div id="example-echart-scatter-bubble" class="example-echart-scatter-bubble example-echarts"></div>
                </div>
            </div>
        </div><!-- Scatter Bubble End -->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <p>For Basic use follow the <a class="text-primary" href="https://ecomfe.github.io/echarts-examples/public/index.html">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
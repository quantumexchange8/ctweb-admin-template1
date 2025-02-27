@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Charts <span>/ ChartJs</span></h3>
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
                    <div class="example-chartjs">
                        <canvas id="example-chartjs-line"></canvas>
                    </div>
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
                    <div class="example-chartjs">
                        <canvas id="example-chartjs-lineArea"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Line Area End -->

        <!-- Bar Vertical Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Bar Vertical</h4>
                </div>
                <div class="box-body">
                    <div class="example-chartjs">
                        <canvas id="example-chartjs-barV"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Bar Vertical End -->

        <!-- Bar Horizontal Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Bar Horizontal</h4>
                </div>
                <div class="box-body">
                    <div class="example-chartjs">
                        <canvas id="example-chartjs-barH"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Bar Horizontal End -->

        <!-- Scatter Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Scatter</h4>
                </div>
                <div class="box-body">
                    <div class="example-chartjs">
                        <canvas id="example-chartjs-scatter"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Scatter End -->

        <!-- Doughnut Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Doughnut</h4>
                </div>
                <div class="box-body">
                    <div class="example-chartjs">
                        <canvas id="example-chartjs-doughnut"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Doughnut End -->

        <!-- Pie Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Pie</h4>
                </div>
                <div class="box-body">
                    <div class="example-chartjs">
                        <canvas id="example-chartjs-pie"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Pie End -->

        <!-- Polar Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Polar</h4>
                </div>
                <div class="box-body">
                    <div class="example-chartjs">
                        <canvas id="example-chartjs-polar"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Polar End -->

        <!-- Radar Start -->
        <div class="col-lg-4 col-md-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Radar</h4>
                </div>
                <div class="box-body">
                    <div class="example-chartjs">
                        <canvas id="example-chartjs-radar"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Radar End -->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <p>For Basic use follow the <a class="text-primary" href="https://www.chartjs.org/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
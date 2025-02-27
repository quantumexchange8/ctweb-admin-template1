@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Dashboard <span>/ Cryptocurrency</span></h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-date-range">
                <input type="text" class="form-control input-date-predefined">
            </div>
        </div><!-- Page Button Group End -->

    </div><!-- Page Headings End -->

    <!-- Top Report Wrap Start -->
    <div class="row">
        <!-- Top Report Start -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report top-report-2">

                <!-- Icon -->
                <div class="icon"><img src="assets/images/icons/cryptocurrency-top-sale-report-1.png" alt=""></div>

                <!-- Head -->
                <div class="head">
                    <h4>Bitcoin Rate</h4>
                </div>

                <!-- Content -->
                <div class="content">
                    <h2>15,752.00</h2>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <div class="progess">
                        <div class="progess-bar" style="width: 92%;"></div>
                    </div>
                    <p>BTC (USD) = $6,316.88 (-0.54%)</p>
                </div>

            </div>
        </div><!-- Top Report End -->

        <!-- Top Report Start -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report top-report-2">

                <!-- Icon -->
                <div class="icon"><img src="assets/images/icons/cryptocurrency-top-sale-report-2.png" alt=""></div>

                <!-- Head -->
                <div class="head">
                    <h4>Ethereum Rate</h4>
                </div>

                <!-- Content -->
                <div class="content">
                    <h2>7,400.00</h2>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <div class="progess">
                        <div class="progess-bar" style="width: 98%;"></div>
                    </div>
                    <p>ETH (USD) = $149.25 (-12.24%)</p>
                </div>

            </div>
        </div><!-- Top Report End -->

        <!-- Top Report Start -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report top-report-2">

                <!-- Icon -->
                <div class="icon"><img src="assets/images/icons/cryptocurrency-top-sale-report-3.png" alt=""></div>

                <!-- Head -->
                <div class="head">
                    <h4>Ripple Rate</h4>
                </div>

                <!-- Content -->
                <div class="content">
                    <h2>5,000.00</h2>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <div class="progess">
                        <div class="progess-bar" style="width: 88%;"></div>
                    </div>
                    <p>XRP (USD) = $0.4921 (-1.01%)</p>
                </div>

            </div>
        </div><!-- Top Report End -->

        <!-- Top Report Start -->
        <div class="col-xlg-3 col-md-6 col-12 mb-30">
            <div class="top-report top-report-2">

                <!-- Icon -->
                <div class="icon"><img src="assets/images/icons/cryptocurrency-top-sale-report-4.png" alt=""></div>

                <!-- Head -->
                <div class="head">
                    <h4>Monero Rate</h4>
                </div>

                <!-- Content -->
                <div class="content">
                    <h2>4,000.00</h2>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <div class="progess">
                        <div class="progess-bar" style="width: 76%;"></div>
                    </div>
                    <p>XMR (USD) = $09.271 (+2.07%)</p>
                </div>

            </div>
        </div><!-- Top Report End -->
    </div><!-- Top Report Wrap End -->

    <div class="row mbn-30">

        <!-- Revenue Statistics Chart Start -->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Revenue Statistics</h4>
                </div>
                <div class="box-body">

                    <div class="chart-legends-1 row">
                        <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                            <h5>Bitcoin</h5>
                            <h3 class="text-secondary">$15,752.00</h3>
                        </div>
                        <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                            <h5>Ethereum</h5>
                            <h3 class="text-primary">$7,400.00</h3>
                        </div>
                        <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                            <h5>Ripple</h5>
                            <h3 class="text-warning">5,000.00</h3>
                        </div>
                        <div class="chart-legend-1 col-12 col-sm-6 col-md-3">
                            <h5>Monero</h5>
                            <h3 class="text-info">4,000.00</h3>
                        </div>
                    </div>

                    <div class="chartjs-revenue-statistics-chart-2">
                        <canvas id="chartjs-revenue-statistics-chart-2"></canvas>
                    </div>

                </div>
            </div>
        </div><!-- Revenue Statistics Chart End -->

        <!-- Market Trends Chart Start -->
        <div class="col-xlg-4 col-lg-6 col-md-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Market Trends</h4>
                </div>
                <div class="box-body">
                    <span class="h5 m-0">Report of Currency</span>
                    <h3 class="mb-20">Dashboard Report</h3>

                    <div class="chartjs-market-trends-chart-2">
                        <canvas id="chartjs-market-trends-chart-2"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Market Trends Chart End -->

        <!-- Analytics Chart Start -->
        <div class="col-xlg-4 col-lg-6 col-md-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Analytics</h4>
                </div>
                <div class="box-body">
                    <span class="h5 m-0">Report of Currency</span>
                    <h3 class="mb-20">Dashboard Report</h3>

                    <div class="chartjs-analytics-chart">
                        <canvas id="chartjs-analytics-chart"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Analytics Chart End -->

        <!-- Graph Chart Start -->
        <div class="col-xlg-4 col-lg-6 col-md-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Graph</h4>
                </div>
                <div class="box-body">
                    <span class="h5 m-0">Rate/usd</span>
                    <h3 class="mb-20">Currency Conversion</h3>

                    <div class="chartjs-graph-chart">
                        <canvas id="chartjs-graph-chart"></canvas>
                    </div>
                </div>
            </div>
        </div><!-- Graph Chart End -->

        <!-- News & Updates Start -->
        <div class="col-xlg-5 col-lg-6 col-12 mb-30">
            <!-- News & Updates Wrap Start -->
            <div class="box">
                <div class="box-head">
                    <h4 class="title">News & Updates</h4>
                </div>
                <div class="box-body">
                    <!-- News & Updates Inner Start -->
                    <div class="news-update-inner">

                        <!-- News Item -->
                        <div class="news-item">

                            <!-- Content -->
                            <div class="content">
                                <!-- Category -->
                                <div class="categories">
                                    <a href="#" class="new">New</a>
                                    <a href="#" class="product">Product</a>
                                </div>
                                <!-- Title -->
                                <h4 class="title"><a href="#">Sed do eiusmod tempor incididunt ut labore. Lorem Ipsum is simplydummy text of the printing and typesetting industry.</a></h4>
                                <!-- Meta -->
                                <ul class="meta">
                                    <li><i class="zmdi zmdi-time"></i>10 Houre ago</li>
                                    <li>By: <a href="#">Howard</a></li>
                                </ul>
                            </div>

                        </div>

                        <!-- News Item -->
                        <div class="news-item">

                            <!-- Content -->
                            <div class="content">
                                <!-- Category -->
                                <div class="categories">
                                    <a href="#" class="support">Support</a>
                                </div>
                                <!-- Title -->
                                <h4 class="title"><a href="#">Sed do eiusmod tempor labore. Lorem Ipsum is simplydummy text of the printing and.</a></h4>
                                <!-- Meta -->
                                <ul class="meta">
                                    <li><i class="zmdi zmdi-time"></i>10 Houre ago</li>
                                    <li>By: <a href="#">Aaron</a></li>
                                </ul>
                            </div>

                        </div>

                        <!-- News Item -->
                        <div class="news-item">

                            <!-- Content -->
                            <div class="content">
                                <!-- Category -->
                                <div class="categories">
                                    <a href="#" class="refund">Refund</a>
                                </div>
                                <!-- Title -->
                                <h4 class="title"><a href="#">Sed do eiusmod typesetting industry. Lorem Ipsum is simplydummy text of the printing and typesetting industry.</a></h4>
                                <!-- Meta -->
                                <ul class="meta">
                                    <li><i class="zmdi zmdi-time"></i>10 Houre ago</li>
                                    <li>By: <a href="#">Dylan</a></li>
                                </ul>
                            </div>

                        </div>

                    </div><!-- News & Updates Inner End -->
                </div>
            </div><!-- News & Updates Wrap End -->
        </div><!-- News & Updates End -->

        <!-- Top Selling Country Start -->
        <div class="col-xlg-7 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Top Selling Country</h4>
                </div>
                <div class="box-body">
                    <div id="vmap-world-2" class="vmap vmap-world-2"></div>
                </div>
            </div>
        </div><!-- Top Selling Country End -->

        <!-- Recent Transaction Start -->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Recent Transaction</h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-selectable table-vertical-middle">

                            <!-- Table Head Start -->
                            <thead>
                                <tr>
                                    <th><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></th>
                                    <th><span>Date</span></th>
                                    <th><span>Type</span></th>
                                    <th><span>Amount</span></th>
                                    <th><span>Remaining</span></th>
                                    <th><span>Pricing</span></th>
                                    <th><span>USD</span></th>
                                    <th><span>Fees(%)</span></th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead><!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                                <tr>
                                    <td><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                    <td><span>13 April 2022</span></td>
                                    <td><span>Sell</span></td>
                                    <td><span>7520.11</span></td>
                                    <td><span>0.1256</span></td>
                                    <td><span>1124.55</span></td>
                                    <td><span>7520.11</span></td>
                                    <td><span>89%</span></td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                </tr>
                                <tr>
                                    <td><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                    <td><span>01 May 2022</span></td>
                                    <td><span>Due</span></td>
                                    <td><span>8533.00</span></td>
                                    <td><span>0.2254</span></td>
                                    <td><span>1254.33</span></td>
                                    <td><span>8533.00</span></td>
                                    <td><span>50%</span></td>
                                    <td><span class="badge badge-warning">Due</span></td>
                                    <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                </tr>
                                <tr class="selected">
                                    <td><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                    <td><span>17 May 2022</span></td>
                                    <td><span>Sell</span></td>
                                    <td><span>5533.00</span></td>
                                    <td><span>0.2366</span></td>
                                    <td><span>3255.22</span></td>
                                    <td><span>6533.00</span></td>
                                    <td><span>64%</span></td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                </tr>
                                <tr>
                                    <td><label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i></label></td>
                                    <td><span>21 May 2022</span></td>
                                    <td><span>Sell</span></td>
                                    <td><span>9322.22</span></td>
                                    <td><span>0.7786</span></td>
                                    <td><span>3266.96</span></td>
                                    <td><span>9322.22</span></td>
                                    <td><span>55%</span></td>
                                    <td><span class="badge badge-danger">Reject</span></td>
                                    <td><a class="h3" href="#"><i class="zmdi zmdi-more"></i></a></td>
                                </tr>
                            </tbody><!-- Table Body End -->

                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Recent Transaction End -->

    </div>

</div>
@endsection
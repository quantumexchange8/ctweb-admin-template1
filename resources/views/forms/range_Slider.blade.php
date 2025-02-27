@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Form <span>/ Range Sliders (Ion Range)</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Basic Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Basic</h4>
                </div>
                <div class="box-body">
                    <input type="text" class="ion-range-1" />
                </div>
            </div>
        </div>
        <!--Basic End-->

        <!--Set Min Value, Max Value, Start Point & Step Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Set Min Value, Max Value, Start Point & Step</h4>
                </div>
                <div class="box-body">
                    <input type="text" class="ion-range-2" />
                </div>
            </div>
        </div>
        <!--Set Min Value, Max Value, Start Point & Step End-->

        <!--Sizes Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Sizes</h4>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">
                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Large</h6>
                            <input type="text" class="ion-range-1" data-extra-classes="irs-lg" />
                        </div>
                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Default</h6>
                            <input type="text" class="ion-range-1" />
                        </div>
                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Small</h6>
                            <input type="text" class="ion-range-1" data-extra-classes="irs-sm" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Sizes End-->

        <!--Skin Style Supprt Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Skin Style Supprt</h4>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">
                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Round</h6>
                            <input type="text" class="ion-range-1" />
                        </div>
                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Flat</h6>
                            <input type="text" class="ion-range-3" />
                        </div>
                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Square</h6>
                            <input type="text" class="ion-range-4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Skin Style Supprt End-->

        <!--Color Variation Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Color Variation</h4>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Primary (Default)</h6>
                            <input type="text" class="ion-range-1" />
                        </div>

                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Secondary</h6>
                            <input type="text" class="ion-range-1" data-extra-classes="secondary" />
                        </div>

                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Success</h6>
                            <input type="text" class="ion-range-1" data-extra-classes="success" />
                        </div>

                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Danger</h6>
                            <input type="text" class="ion-range-1" data-extra-classes="danger" />
                        </div>

                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Warning</h6>
                            <input type="text" class="ion-range-1" data-extra-classes="warning" />
                        </div>

                        <div class="col-lg-4 mb-20">
                            <h6 class="mb-15">Info</h6>
                            <input type="text" class="ion-range-1" data-extra-classes="info" />
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Color Variation End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;input type="text" class="ion-range-1"/&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    $(".ion-range-1").ionRangeSlider({<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;skin: 'round',<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;type: 'single',<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;min: 0,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;max: 100,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;from: 50,<br>
                    });
                </code>
                    <p class="mt-15 mb-0">For Sizes use <code>data-extra-classes="irs-lg/sm"</code>. For Color use <code>data-extra-classes="secondary/seccess"</code> classes etc. And for Skins Adomx Support those 3 Skin (Round/Flat/Square)</p>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="http://ionden.com/a/plugins/ion.rangeSlider/start.html">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
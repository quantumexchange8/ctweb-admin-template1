@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Map <span>/ Vector Map</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!-- Vector Map World Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">World Map</h4>
                </div>
                <div class="box-body">
                    <div id="vmap-world" class="vmap vmap-world"></div>
                </div>
            </div>
        </div><!-- Vector Map World End -->

        <!-- Vector Map USA Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">USA Map</h4>
                </div>
                <div class="box-body">
                    <div id="vmap-usa" class="vmap vmap-usa"></div>
                </div>
            </div>
        </div><!-- Vector Map USA End -->

        <!-- Vector Map Asia Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Asia Map</h4>
                </div>
                <div class="box-body">
                    <div id="vmap-asia" class="vmap vmap-asia"></div>
                </div>
            </div>
        </div><!-- Vector Map Asia End -->

        <!-- Vector Map Australia Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Australia Map</h4>
                </div>
                <div class="box-body">
                    <div id="vmap-australia" class="vmap vmap-australia"></div>
                </div>
            </div>
        </div><!-- Vector Map Australia End -->

        <!-- Vector Map Africa Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Africa Map</h4>
                </div>
                <div class="box-body">
                    <div id="vmap-africa" class="vmap vmap-africa"></div>
                </div>
            </div>
        </div><!-- Vector Map Africa End -->

        <!-- Vector Map Europe Start -->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Europe Map</h4>
                </div>
                <div class="box-body">
                    <div id="vmap-europe" class="vmap vmap-europe"></div>
                </div>
            </div>
        </div><!-- Vector Map Europe End -->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;div id="vmap-world" class="vmap vmap-world"&gt;&lt;/div&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    $('#vmap-world').vectorMap({ <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;map: 'world_en', // Map Type <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;Other options ... <br>
                    });
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://www.10bestdesign.com/jqvmap/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
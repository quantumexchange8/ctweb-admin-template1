@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ Dropdown</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Single Button Dropdown Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Single Button Dropdown</h4>
                </div>
                <div class="box-body">
                    <div class="dropdown">
                        <button class="button button-primary dropdown-toggle" data-bs-toggle="dropdown">Dropdown button</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Single Button Dropdown End-->

        <!--Single Link Dropdown Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Single Link Dropdown</h4>
                </div>
                <div class="box-body">
                    <div class="dropdown">
                        <a href="#" class="button button-secondary dropdown-toggle" data-bs-toggle="dropdown">Link button</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Single Link Dropdown End-->

        <!--Group Button Dropdown Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Group Button Dropdown</h4>
                </div>
                <div class="box-body">
                    <div class="dropdown d-inline-block">
                        <button class="button button-primary dropdown-toggle" data-bs-toggle="dropdown">primary</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="button button-secondary dropdown-toggle" data-bs-toggle="dropdown">secondary</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="button button-success dropdown-toggle" data-bs-toggle="dropdown">success</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="button button-danger dropdown-toggle" data-bs-toggle="dropdown">danger</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="button button-warning dropdown-toggle" data-bs-toggle="dropdown">warning</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="button button-info dropdown-toggle" data-bs-toggle="dropdown">info</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Group Button Dropdown End-->

        <!--Split Button Dropdown Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Split Button Dropdown</h4>
                </div>
                <div class="box-body">
                    <div class="dropdown button-group d-inline-flex">
                        <button class="button button-primary ">primary</button>
                        <button class="button button-primary dropdown-toggle" data-bs-toggle="dropdown"><span class="sr-only">arrow</span></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown button-group d-inline-flex">
                        <button class="button button-secondary ">secondary</button>
                        <button class="button button-secondary dropdown-toggle" data-bs-toggle="dropdown"><span class="sr-only">arrow</span></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown button-group d-inline-flex">
                        <button class="button button-success ">success</button>
                        <button class="button button-success dropdown-toggle" data-bs-toggle="dropdown"><span class="sr-only">arrow</span></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown button-group d-inline-flex">
                        <button class="button button-danger ">danger</button>
                        <button class="button button-danger dropdown-toggle" data-bs-toggle="dropdown"><span class="sr-only">arrow</span></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown button-group d-inline-flex">
                        <button class="button button-warning ">warning</button>
                        <button class="button button-warning dropdown-toggle" data-bs-toggle="dropdown"><span class="sr-only">arrow</span></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown button-group d-inline-flex">
                        <button class="button button-info ">info</button>
                        <button class="button button-info dropdown-toggle" data-bs-toggle="dropdown"><span class="sr-only">arrow</span></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Split Button Dropdown End-->

        <!--Dropdown Directions Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Dropdown Directions</h4>
                </div>
                <div class="box-body">
                    <div class="dropdown dropup d-inline-flex">
                        <button class="button button-primary dropdown-toggle" data-bs-toggle="dropdown">dropup</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown dropright d-inline-flex">
                        <button class="button button-secondary dropdown-toggle" data-bs-toggle="dropdown">dropright</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown dropleft d-inline-flex">
                        <button class="button button-warning dropdown-toggle" data-bs-toggle="dropdown">dropleft</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Dropdown Directions End-->

        <!--Menu Alignment Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Menu Alignment</h4>
                </div>
                <div class="box-body">
                    <div class="dropdown d-inline-flex">
                        <button class="button button-primary dropdown-toggle" data-bs-toggle="dropdown">Menu Left Align</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-flex">
                        <button class="button button-secondary dropdown-toggle" data-bs-toggle="dropdown">Menu Right Align</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Menu Alignment End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <p>For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/5.2/components/dropdowns/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
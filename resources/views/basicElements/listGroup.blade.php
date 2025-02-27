@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ List Group/</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Basic Example Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Basic Example</h4>
                </div>
                <div class="box-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Basic Example End-->

        <!--Active Items Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Active Items</h4>
                </div>
                <div class="box-body">
                    <ul class="list-group">
                        <li class="list-group-item active">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Active Items End-->

        <!--Disabled Items Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Disabled Items</h4>
                </div>
                <div class="box-body">
                    <ul class="list-group">
                        <li class="list-group-item disabled">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item disabled">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Disabled Items End-->

        <!--List Link Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">List Link</h4>
                </div>
                <div class="box-body">
                    <ul class="list-group">
                        <li><a href="#" class="list-group-item list-group-item-action active">Cras justo odio</a></li>
                        <li><a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a></li>
                        <li><a href="#" class="list-group-item list-group-item-action disabled">Morbi leo risus</a></li>
                        <li><a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a></li>
                        <li><a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--List Link End-->

        <!--List Button Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">List Button</h4>
                </div>
                <div class="box-body">
                    <ul class="list-group">
                        <li><button class="list-group-item list-group-item-action active">Cras justo odio</button></li>
                        <li><button class="list-group-item list-group-item-action">Dapibus ac facilisis in</button></li>
                        <li><button class="list-group-item list-group-item-action disabled">Morbi leo risus</button></li>
                        <li><button class="list-group-item list-group-item-action">Porta ac consectetur ac</button></li>
                        <li><button class="list-group-item list-group-item-action">Vestibulum at eros</button></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--List Button End-->

        <!--List With Badge Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">List With Badge</h4>
                </div>
                <div class="box-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in <span class="badge badge-primary badge-pill">1</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">A simple primary list group item <span class="badge badge-primary badge-pill">2</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">A simple secondary list group item <span class="badge badge-primary badge-pill">3</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">A simple success list group item <span class="badge badge-primary badge-pill">4</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">A simple danger list group item <span class="badge badge-primary badge-pill">5</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--List With Badge End-->

        <!--Contextual Classes Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Contextual Classes</h4>
                </div>
                <div class="box-body">
                    <ul class="list-group">
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                        <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                        <li class="list-group-item list-group-item-success">A simple success list group item</li>
                        <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                        <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                        <li class="list-group-item list-group-item-info">A simple info list group item</li>
                        <li class="list-group-item list-group-item-light">A simple light list group item</li>
                        <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Contextual Classes End-->

        <!--Custom Content Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Custom Content</h4>
                </div>
                <div class="box-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Custom Content End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &nbsp;&lt;ul class="list-group"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;<br />&lt;/ul&gt;
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://getbootstrap.com/docs/5.2/components/list-group/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
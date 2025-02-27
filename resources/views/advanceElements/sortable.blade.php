@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Elements <span>/ List Sortable</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Simple Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Simple</h4>
                </div>
                <div class="box-body">
                    <ul id="simple-sortable" class="sortable simple-sortable list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Simple End-->

        <!--Handle Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Handle</h4>
                </div>
                <div class="box-body">
                    <ul id="sortable-handle" class="sortable sortable-handle list-group">
                        <li class="list-group-item"><i class="fa fa-arrows-alt handle mr-5"></i> Cras justo odio</li>
                        <li class="list-group-item"><i class="fa fa-arrows-alt handle mr-5"></i> Dapibus ac facilisis in</li>
                        <li class="list-group-item"><i class="fa fa-arrows-alt handle mr-5"></i> Morbi leo risus</li>
                        <li class="list-group-item"><i class="fa fa-arrows-alt handle mr-5"></i> Porta ac consectetur ac</li>
                        <li class="list-group-item"><i class="fa fa-arrows-alt handle mr-5"></i> Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Handle End-->

        <!--Shared Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Shared</h4>
                </div>
                <div class="box-body">
                    <div class="row mbn-30">
                        <div class="col-md-6 col-12 mb-30">
                            <ul id="sortable-share-left" class="sortable sortable-share-left list-group">
                                <li class="list-group-item bg-primary text-white">Cras justo odio</li>
                                <li class="list-group-item bg-primary text-white">Dapibus ac facilisis in</li>
                                <li class="list-group-item bg-primary text-white">Morbi leo risus</li>
                                <li class="list-group-item bg-primary text-white">Porta ac consectetur ac</li>
                                <li class="list-group-item bg-primary text-white">Vestibulum at eros</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12 mb-30">
                            <ul id="sortable-share-right" class="sortable sortable-share-right list-group">
                                <li class="list-group-item bg-secondary text-white">Cras justo odio</li>
                                <li class="list-group-item bg-secondary text-white">Dapibus ac facilisis in</li>
                                <li class="list-group-item bg-secondary text-white">Morbi leo risus</li>
                                <li class="list-group-item bg-secondary text-white">Porta ac consectetur ac</li>
                                <li class="list-group-item bg-secondary text-white">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Shared End-->

        <!--Cloning Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Cloning</h4>
                </div>
                <div class="box-body">
                    <div class="row mbn-30">
                        <div class="col-md-6 col-12 mb-30">
                            <ul id="sortable-clone-left" class="sortable sortable-clone-left list-group">
                                <li class="list-group-item bg-success text-white">Cras justo odio</li>
                                <li class="list-group-item bg-success text-white">Dapibus ac facilisis in</li>
                                <li class="list-group-item bg-success text-white">Morbi leo risus</li>
                                <li class="list-group-item bg-success text-white">Porta ac consectetur ac</li>
                                <li class="list-group-item bg-success text-white">Vestibulum at eros</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-12 mb-30">
                            <ul id="sortable-clone-right" class="sortable sortable-clone-right list-group">
                                <li class="list-group-item bg-danger text-white">Cras justo odio</li>
                                <li class="list-group-item bg-danger text-white">Dapibus ac facilisis in</li>
                                <li class="list-group-item bg-danger text-white">Morbi leo risus</li>
                                <li class="list-group-item bg-danger text-white">Porta ac consectetur ac</li>
                                <li class="list-group-item bg-danger text-white">Vestibulum at eros</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Cloning End-->

        <!--Disabling Sorting Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Disabling Sorting</h4>
                </div>
                <div class="box-body">
                    <ul id="disable-sorting" class="sortable disable-sorting list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Disabling Sorting End-->

        <!--Filter Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Filter</h4>
                </div>
                <div class="box-body">
                    <ul id="filter-sorting" class="sortable filter-sorting list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item filtered bg-danger text-white">Filtered list not dragable</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Filter End-->

        <!--Grid Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Grid</h4>
                </div>
                <div class="box-body">
                    <ul id="grid-sorting" class="sortable grid-sorting row list-unstyled m-n1">
                        <li class="col-2 p-3 text-center text-white m-1 bg-primary">Grid 1</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-secondary">Grid 2</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-success">Grid 3</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-danger">Grid 4</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-warning">Grid 5</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-info">Grid 6</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-primary">Grid 7</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-secondary">Grid 8</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-success">Grid 9</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-danger">Grid 10</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-warning">Grid 11</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-info">Grid 12</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-primary">Grid 13</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-secondary">Grid 14</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-success">Grid 15</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-danger">Grid 16</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-warning">Grid 17</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-info">Grid 18</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-primary">Grid 19</li>
                        <li class="col-2 p-3 text-center text-white m-1 bg-secondary">Grid 20</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Grid End-->

        <!--Nested Sortables Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">Nested Sortables</h4>
                </div>
                <div class="box-body">
                    <ul id="nested-sortable" class="sortable nested-sortable list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in
                            <ul class="sortable nested-sortable list-group">
                                <li class="list-group-item bg-primary text-white">Cras justo odio</li>
                                <li class="list-group-item bg-primary text-white">Dapibus ac facilisis in</li>
                                <li class="list-group-item bg-primary text-white">Filtered list not dragable</li>
                                <li class="list-group-item bg-primary text-white">Porta ac consectetur ac
                                    <ul class="sortable nested-sortable list-group">
                                        <li class="list-group-item bg-secondary text-white">Cras justo odio</li>
                                        <li class="list-group-item bg-secondary text-white">Dapibus ac facilisis in</li>
                                        <li class="list-group-item bg-secondary text-white">Filtered list not dragable</li>
                                        <li class="list-group-item bg-secondary text-white">Porta ac consectetur ac</li>
                                        <li class="list-group-item bg-secondary text-white">Vestibulum at eros</li>
                                    </ul>
                                </li>
                                <li class="list-group-item bg-primary text-white">Vestibulum at eros</li>
                            </ul>
                        </li>
                        <li class="list-group-item">Lorem ipsum dolor</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Nested Sortables End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;ul id="simple-sortable" class="sortable simple-sortable list-group"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="list-group-item"&gt;Dapibus ac facilisis in&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp; &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;<br />&lt;/ul&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                    var simpleSorting = document.getElementById('simple-sortable');<br>
                    new Sortable(simpleSorting, {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;animation: 150,<br>
                    });
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="https://clipboardjs.com/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
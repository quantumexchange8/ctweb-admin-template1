@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Table <span>/ Jsgrid Table</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Basic Start-->
        <div class="col-12 mb-30">

            <div class="box">
                <div class="box-head">
                    <h3 class="title">Basic</h3>
                </div>
                <div class="box-body">

                    <div id="jsGrid"></div>

                </div>
            </div>

        </div>
        <!--Basic End-->

        <!--Static Start-->
        <div class="col-12 mb-30">

            <div class="box">
                <div class="box-head">
                    <h3 class="title">Static</h3>
                </div>
                <div class="box-body">

                    <div id="jsGrid-static"></div>

                </div>
            </div>

        </div>
        <!--Static End-->

        <!--Sorting Start-->
        <div class="col-12 mb-30">

            <div class="box">
                <div class="box-head">
                    <h3 class="title">Sorting</h3>
                </div>
                <div class="box-body">

                    <div class="jsGrid-sorting-panel">
                        <div>Sorting Field:
                            <select id="sortingField" class="form-control form-control-sm">
                                <option>Name</option>
                                <option>Age</option>
                                <option>Address</option>
                                <option>Country</option>
                                <option>Married</option>
                            </select>
                            <button class="button button-primary" id="sort">Sort</button>
                        </div>
                    </div>
                    <div id="jsGrid-sorting"></div>

                </div>
            </div>

        </div>
        <!--Sorting End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>
                    &lt;div id="jsGrid"&gt;&lt;/div&gt;
                </code>
                    <h6 class="mt-15">Js Activation</h6>
                    <code>
                        $("#jsGrid").jsGrid({<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;options... <br>
                        });
                </code>
                    <p class="mt-15">For more Information please follow the <a class="text-primary" href="http://js-grid.com/">Official Documentation</a></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Form <span>/ Selects</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-50">

        <!--Select2 Start-->
        <div class="col-12 mb-50">
            <div class="box box-border-less p-0">

                <div class="box-head">
                    <h3 class="title">Select 2</h3>
                    <p>For more option see <a class="text-primary" href="https://select2.org/getting-started/installation">Official Documentation</a></p>
                </div>

                <div class="box-body">
                    <div class="row mbn-30">

                        <!--Single Select-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Single Select</h5>
                            <select class="form-control select2">
                                <optgroup label="Options One">
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option>Four</option>
                                    <option>Five</option>
                                    <option>Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option>Seven</option>
                                    <option>Eight</option>
                                    <option>Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Single Select-->

                        <!--Multiple Select-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Multiple Select</h5>
                            <select class="form-control select2" multiple>
                                <optgroup label="Options One">
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option>Four</option>
                                    <option>Five</option>
                                    <option>Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option>Seven</option>
                                    <option>Eight</option>
                                    <option>Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Multiple Select-->

                        <!--Tagging Support-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Tagging Support</h5>
                            <select class="form-control select2-tags" multiple>
                                <optgroup label="Options One">
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option>Four</option>
                                    <option>Five</option>
                                    <option>Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option>Seven</option>
                                    <option>Eight</option>
                                    <option>Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Tagging Support-->

                    </div>
                </div>

            </div>
        </div>
        <!--Select2 End-->

        <!--Nice Select Start-->
        <div class="col-12 mb-50">
            <div class="box box-border-less p-0">

                <div class="box-head">
                    <h3 class="title">Nice Select</h3>
                    <p>For more option see <a class="text-primary" href="https://hernansartorio.com/jquery-nice-select/">Official Documentation</a></p>
                </div>

                <div class="box-body">
                    <div class="row mbn-30">

                        <!--Single Select-->
                        <div class="col-lg-4 col-12 mb-30">
                            <select class="form-control nice-select">
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                                <option>Four</option>
                                <option>Five</option>
                                <option>Six</option>
                                <option>Seven</option>
                                <option>Eight</option>
                                <option>Nine</option>
                            </select>
                        </div>
                        <!--Single Select-->

                    </div>
                </div>

            </div>
        </div>
        <!--Nice Select End-->

        <!--Bootstrap Select Start-->
        <div class="col-12 mb-50">
            <div class="box box-border-less p-0">

                <div class="box-head">
                    <h3 class="title">Bootstrap Select</h3>
                    <p>For more option see <a class="text-primary" href="https://developer.snapappointments.com/bootstrap-select/examples/">Official Documentation</a></p>
                </div>

                <div class="box-body">
                    <div class="row mbn-30">

                        <!--Single Select-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Single Select</h5>
                            <select class="form-control bSelect">
                                <optgroup label="Options One">
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option>Four</option>
                                    <option>Five</option>
                                    <option>Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option>Seven</option>
                                    <option>Eight</option>
                                    <option>Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Single Select-->

                        <!--Multiple Select-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Multiple Select</h5>
                            <select class="form-control bSelect" multiple>
                                <optgroup label="Options One">
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option>Four</option>
                                    <option>Five</option>
                                    <option>Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option>Seven</option>
                                    <option>Eight</option>
                                    <option>Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Multiple Select-->

                        <!--Live Search-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Live Search</h5>
                            <select class="form-control bSelect" data-live-search="true">
                                <optgroup label="Options One">
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option>Four</option>
                                    <option>Five</option>
                                    <option>Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option>Seven</option>
                                    <option>Eight</option>
                                    <option>Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Live Search-->

                        <!--Live Search-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Limit the number of selections</h5>
                            <select class="form-control bSelect" multiple data-max-options="2">
                                <optgroup label="Options One">
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option>Four</option>
                                    <option>Five</option>
                                    <option>Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option>Seven</option>
                                    <option>Eight</option>
                                    <option>Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Live Search-->

                        <!--Custom Placeholder-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Custom Placeholder</h5>
                            <select class="form-control bSelect" title="Choose one of the following...">
                                <optgroup label="Options One">
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option>Four</option>
                                    <option>Five</option>
                                    <option>Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option>Seven</option>
                                    <option>Eight</option>
                                    <option>Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Custom Placeholder-->

                        <!--Custom Options Text-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Custom Options Text</h5>
                            <select class="form-control bSelect">
                                <optgroup label="Options One">
                                    <option title="Option 1">One</option>
                                    <option title="Option 2">Two</option>
                                    <option title="Option 3">Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option title="Option 4">Four</option>
                                    <option title="Option 5">Five</option>
                                    <option title="Option 6">Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option title="Option 7">Seven</option>
                                    <option title="Option 8">Eight</option>
                                    <option title="Option 9">Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Custom Options Text-->

                        <!--Selected text format-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Selected Text Format</h5>
                            <select class="form-control bSelect" multiple data-selected-text-format="count">
                                <optgroup label="Options One">
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option>Four</option>
                                    <option>Five</option>
                                    <option>Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option>Seven</option>
                                    <option>Eight</option>
                                    <option>Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Selected text format-->

                        <!--Customize Options-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Customize Options</h5>
                            <select class="form-control bSelect">
                                <optgroup label="Options One">
                                    <option data-icon="zmdi zmdi-album">Album</option>
                                    <option data-icon="zmdi zmdi-audio">Audio</option>
                                    <option data-icon="zmdi zmdi-balance">Balance</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option data-icon="zmdi zmdi-bug">Bug</option>
                                    <option data-icon="zmdi zmdi-cake">Cake</option>
                                    <option data-icon="zmdi zmdi-city">City</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option data-icon="zmdi zmdi-cocktail">Cocktail</option>
                                    <option data-icon="zmdi zmdi-cutlery">Cutlery</option>
                                    <option data-icon="zmdi zmdi-favorite">Favorite</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Customize Options-->

                        <!--Select/Deselect All Options-->
                        <div class="col-lg-4 col-12 mb-30">
                            <h5 class="sub-title">Select/deselect all options</h5>
                            <select class="form-control bSelect" multiple data-actions-box="true">
                                <optgroup label="Options One">
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </optgroup>
                                <optgroup label="Options Two">
                                    <option>Four</option>
                                    <option>Five</option>
                                    <option>Six</option>
                                </optgroup>
                                <optgroup label="Options Three">
                                    <option>Seven</option>
                                    <option>Eight</option>
                                    <option>Nine</option>
                                </optgroup>
                            </select>
                        </div>
                        <!--Select/Deselect All Options-->

                        <!--Selected text format-->
                        <div class="col-12 mb-30">
                            <h5 class="sub-title">Style Button classes</h5>
                            <div class="row mbn-15">

                                <div class="col-lg-4 col-12 mb-15">
                                    <select class="form-control bSelect" title="Primary" data-style="btn-primary">
                                        <optgroup label="Options One">
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                        <optgroup label="Options Two">
                                            <option>Four</option>
                                            <option>Five</option>
                                            <option>Six</option>
                                        </optgroup>
                                        <optgroup label="Options Three">
                                            <option>Seven</option>
                                            <option>Eight</option>
                                            <option>Nine</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-12 mb-15">
                                    <select class="form-control bSelect" title="Secondary" data-style="btn-secondary">
                                        <optgroup label="Options One">
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                        <optgroup label="Options Two">
                                            <option>Four</option>
                                            <option>Five</option>
                                            <option>Six</option>
                                        </optgroup>
                                        <optgroup label="Options Three">
                                            <option>Seven</option>
                                            <option>Eight</option>
                                            <option>Nine</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-12 mb-15">
                                    <select class="form-control bSelect" title="Success" data-style="btn-success">
                                        <optgroup label="Options One">
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                        <optgroup label="Options Two">
                                            <option>Four</option>
                                            <option>Five</option>
                                            <option>Six</option>
                                        </optgroup>
                                        <optgroup label="Options Three">
                                            <option>Seven</option>
                                            <option>Eight</option>
                                            <option>Nine</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-12 mb-15">
                                    <select class="form-control bSelect" title="Danger" data-style="btn-danger">
                                        <optgroup label="Options One">
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                        <optgroup label="Options Two">
                                            <option>Four</option>
                                            <option>Five</option>
                                            <option>Six</option>
                                        </optgroup>
                                        <optgroup label="Options Three">
                                            <option>Seven</option>
                                            <option>Eight</option>
                                            <option>Nine</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-12 mb-15">
                                    <select class="form-control bSelect" title="Warning" data-style="btn-warning">
                                        <optgroup label="Options One">
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                        <optgroup label="Options Two">
                                            <option>Four</option>
                                            <option>Five</option>
                                            <option>Six</option>
                                        </optgroup>
                                        <optgroup label="Options Three">
                                            <option>Seven</option>
                                            <option>Eight</option>
                                            <option>Nine</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-12 mb-15">
                                    <select class="form-control bSelect" title="Info" data-style="btn-info">
                                        <optgroup label="Options One">
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                        <optgroup label="Options Two">
                                            <option>Four</option>
                                            <option>Five</option>
                                            <option>Six</option>
                                        </optgroup>
                                        <optgroup label="Options Three">
                                            <option>Seven</option>
                                            <option>Eight</option>
                                            <option>Nine</option>
                                        </optgroup>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <!--Selected text format-->

                    </div>
                </div>

            </div>
        </div>
        <!--Bootstrap Select End-->

    </div>

</div>
@endsection
@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Form <span>/ Basic Elements</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Form controls Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Form controls</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <!--Form Field-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Default</h6>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control" placeholder="Input"></div>
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Select</option>
                                        <optgroup label="Options One">
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                        <optgroup label="Options Two">
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-12 mb-15"><textarea class="form-control" placeholder="Textarea"></textarea></div>
                            </div>

                        </div>
                        <!--Form Field-->

                        <!--Readonly Field-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Readonly</h6>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control" readonly placeholder="Readonly Input"></div>
                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Readonly Select</option>
                                        <optgroup label="Options One">
                                            <option disabled>One</option>
                                            <option disabled>Two</option>
                                            <option disabled>Three</option>
                                        </optgroup>
                                        <optgroup label="Options Two">
                                            <option disabled>One</option>
                                            <option disabled>Two</option>
                                            <option disabled>Three</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-12 mb-15"><textarea class="form-control" readonly placeholder="Readonly Textarea"></textarea></div>
                            </div>

                        </div>
                        <!--Readonly Field-->

                        <!--Disabled Field-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Disabled</h6>

                            <div class="row mbn-15">
                                <div class="col-12 mb-15"><input type="text" class="form-control" disabled placeholder="Disabled Input"></div>
                                <div class="col-12 mb-15">
                                    <select class="form-control" disabled>
                                        <option>Disabled Select</option>
                                        <optgroup label="Options One">
                                            <option disabled>One</option>
                                            <option disabled>Two</option>
                                            <option disabled>Three</option>
                                        </optgroup>
                                        <optgroup label="Options Two">
                                            <option disabled>One</option>
                                            <option disabled>Two</option>
                                            <option disabled>Three</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-12 mb-15"><textarea class="form-control" disabled placeholder="Disabled Textarea"></textarea></div>
                            </div>

                        </div>
                        <!--Disabled Field-->

                    </div>
                </div>
                <div class="box-foot">
                    <p>Textual form controls—like inputs, selects, and textareas—are styled with the <code>.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more.</p>
                </div>
            </div>
        </div>
        <!--Form controls End-->

        <!--Form Size Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Sizing</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <!--Large Field-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Large</h6>

                            <div class="row mbn-15">

                                <div class="col-12 mb-15"><input type="text" class="form-control form-control-lg" placeholder="Input Large"></div>

                                <div class="col-12 mb-15">
                                    <select class="form-control form-control-lg">
                                        <option>Select Large</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <!--Large Field-->

                        <!--Default Field-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Default</h6>
                            <div class="row mbn-15">

                                <div class="col-12 mb-15"><input type="text" class="form-control" placeholder="Input"></div>

                                <div class="col-12 mb-15">
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <!--Default Field-->

                        <!--Small Field-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Small</h6>

                            <div class="row mbn-15">

                                <div class="col-12 mb-15"><input type="text" class="form-control form-control-sm" placeholder="Input Small"></div>

                                <div class="col-12 mb-15">
                                    <select class="form-control form-control-sm">
                                        <option>Select Small</option>
                                        <option>One</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <!--Small Field-->

                    </div>
                </div>
                <div class="box-foot">
                    <p>Control Size using classes like <code>.form-control-sm or .form-control-lg</code> classes.</p>
                </div>
            </div>
        </div>
        <!--Form Size End-->

        <!--Form State Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">State</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-15">

                        <div class="col-lg-4 mb-15"><input type="text" class="form-control" placeholder="Input default"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control dark" placeholder="Input dark"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control primary" placeholder="Input primary"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control secondary" placeholder="Input secondary"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control success" placeholder="Input success"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control danger" placeholder="Input danger"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control warning" placeholder="Input warning"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control info" placeholder="Input info"></div>

                    </div>
                </div>
                <div class="box-foot">
                    <p>Control Input State using classes like <code>.dark</code>, <code>.primary</code>, <code>.secondary</code>, <code>.success</code>, <code>.danger</code>, <code>.warning</code>, <code>.info</code> classes.</p>
                </div>
            </div>
        </div>
        <!--Form State End-->

        <!--Form Focus State Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Focus State</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-15">

                        <div class="col-lg-4 mb-15"><input type="text" class="form-control" placeholder="Input focus default"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control focus-dark" placeholder="Input focus dark"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control focus-primary" placeholder="Input focus primary"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control focus-secondary" placeholder="Input focus secondary"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control focus-success" placeholder="Input focus success"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control focus-danger" placeholder="Input focus danger"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control focus-warning" placeholder="Input focus warning"></div>
                        <div class="col-lg-4 mb-15"><input type="text" class="form-control focus-info" placeholder="Input focus info"></div>

                    </div>
                </div>
                <div class="box-foot">
                    <p>Control Input Focus State using classes like <code>.dark</code>, <code>.primary</code>, <code>.secondary</code>, <code>.success</code>, <code>.danger</code>, <code>.warning</code>, <code>.info</code> classes.</p>
                </div>
            </div>
        </div>
        <!--Form Focus State End-->

        <!--Form Help text Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Help text</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-15">

                        <div class="col-12 mb-15">
                            <input type="text" class="form-control" placeholder="Bottom help text">
                            <span class="form-help-text">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji. </span>
                        </div>

                    </div>
                </div>
                <div class="box-foot">
                    <p>Help text below inputs can be styled with <code>.form-help-text</code> class</p>
                </div>
            </div>
        </div>
        <!--Form Help text End-->

        <!--Other Default Elements Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Other Default Elements</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <!--Multiple Select-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Multiple Select</h6>

                            <select class="form-control" multiple>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                                <option>Four</option>
                                <option>Five</option>
                            </select>

                        </div>
                        <!--Multiple Select-->

                        <!--File Input-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">File Input</h6>

                            <input type="file" class="form-control">

                        </div>
                        <!--File Input-->

                        <!--Input Range-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Range</h6>

                            <input type="range" class="form-control-range">

                        </div>
                        <!--Input Range-->

                        <!--Checkbox-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Checkbox</h6>

                            <label><input type="checkbox">Default checkbox</label>
                            <label><input type="checkbox" disabled>Checkbox Disabled</label>

                        </div>
                        <!--Checkbox-->

                        <!--Radio-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Radio</h6>

                            <label><input type="radio" name="basicRadio">Default Radio</label>
                            <label><input type="radio" name="basicRadio">Another Default Radio</label>
                            <label><input type="radio" name="basicRadio" disabled>Radio Disabled</label>

                        </div>
                        <!--Radio-->

                        <!--Inline Checkbox & Radio-->
                        <div class="col-lg-4 col-12 mb-20">

                            <h6 class="mb-15">Inline Checkbox & Radio</h6>

                            <div class="form-group">
                                <label class="inline"><input type="checkbox">One</label>
                                <label class="inline"><input type="checkbox">Two</label>
                            </div>

                            <div class="form-group">
                                <label class="inline"><input type="radio" name="inlineBasicRadio">One</label>
                                <label class="inline"><input type="radio" name="inlineBasicRadio">Two</label>
                            </div>

                        </div>
                        <!--Inline Checkbox & Radio-->

                    </div>
                </div>
            </div>
        </div>
        <!--Other Default Elements End-->

    </div>

</div>
@endsection
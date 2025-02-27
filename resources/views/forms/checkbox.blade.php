@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Form <span>/ Checkbox</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Custom Checkbox Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Custom Checkbox 1</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <div class="col-sm-6 col-12 mb-20">

                            <h6 class="mb-15">Checkbox 1</h6>

                            <div class="adomx-checkbox-radio-group">
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i> Checkbox 1</label>
                                <label class="adomx-checkbox"><input type="checkbox" checked> <i class="icon"></i> Checkbox 1 Active</label>
                                <label class="adomx-checkbox"><input type="checkbox" disabled> <i class="icon"></i> Checkbox 1 Disabled</label>
                            </div>

                        </div>

                        <div class="col-sm-6 col-12 mb-20">

                            <h6 class="mb-15">Checkbox 1 Inline</h6>

                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i> One</label>
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i> Two</label>
                                <label class="adomx-checkbox"><input type="checkbox"> <i class="icon"></i> Three</label>
                            </div>

                        </div>

                        <div class="col-12 mb-20">

                            <h6 class="mb-15">Checkbox 1 Color Variation</h6>

                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-checkbox primary"><input type="checkbox" checked> <i class="icon"></i> Primary</label>
                                <label class="adomx-checkbox secondary"><input type="checkbox" checked> <i class="icon"></i> Secondary</label>
                                <label class="adomx-checkbox success"><input type="checkbox" checked> <i class="icon"></i> Success</label>
                                <label class="adomx-checkbox danger"><input type="checkbox" checked> <i class="icon"></i> Danger</label>
                                <label class="adomx-checkbox warning"><input type="checkbox" checked> <i class="icon"></i> Warning</label>
                                <label class="adomx-checkbox info"><input type="checkbox" checked> <i class="icon"></i> Info</label>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Custom Checkbox End-->

        <!--Custom Checkbox Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Custom Checkbox 2</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <div class="col-sm-6 col-12 mb-20">

                            <h6 class="mb-15">Checkbox 2</h6>

                            <div class="adomx-checkbox-radio-group">
                                <label class="adomx-checkbox-2"><input type="checkbox"> <i class="icon"></i> Checkbox 2</label>
                                <label class="adomx-checkbox-2"><input type="checkbox" checked> <i class="icon"></i> Checkbox 2 Active</label>
                                <label class="adomx-checkbox-2"><input type="checkbox" disabled> <i class="icon"></i> Checkbox 2 Disabled</label>
                            </div>

                        </div>

                        <div class="col-sm-6 col-12 mb-20">

                            <h6 class="mb-15">Checkbox 2 Inline</h6>

                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-checkbox-2"><input type="checkbox"> <i class="icon"></i> One</label>
                                <label class="adomx-checkbox-2"><input type="checkbox"> <i class="icon"></i> Two</label>
                                <label class="adomx-checkbox-2"><input type="checkbox"> <i class="icon"></i> Three</label>
                            </div>

                        </div>

                        <div class="col-12 mb-20">

                            <h6 class="mb-15">Checkbox 2 Color Variation</h6>

                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-checkbox-2 primary"><input type="checkbox" checked> <i class="icon"></i> Primary</label>
                                <label class="adomx-checkbox-2 secondary"><input type="checkbox" checked> <i class="icon"></i> Secondary</label>
                                <label class="adomx-checkbox-2 success"><input type="checkbox" checked> <i class="icon"></i> Success</label>
                                <label class="adomx-checkbox-2 danger"><input type="checkbox" checked> <i class="icon"></i> Danger</label>
                                <label class="adomx-checkbox-2 warning"><input type="checkbox" checked> <i class="icon"></i> Warning</label>
                                <label class="adomx-checkbox-2 info"><input type="checkbox" checked> <i class="icon"></i> Info</label>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Custom Checkbox End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>&lt;div class="adomx-checkbox-radio-group"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;label class="adomx-checkbox"&gt;&lt;input type="checkbox"&gt; &lt;i class="icon"&gt;&lt;/i&gt; Checkbox 1&lt;/label&gt;<br />&lt;/div&gt;</code>
                    <p class="mt-15">This is the common markup for Adomx custom checkbox. To use checkbox 2 just change <code>&lt;label class="adomx-checkbox"&gt;</code> to <code>&lt;label class="adomx-checkbox-2"&gt;</code>. For color variation just add the color class like for secondary color <code>&lt;label class="adomx-checkbox secondary"&gt;</code> and for inline checkbox add <code>inline</code> class to <code>&lt;div class="adomx-checkbox-radio-group"&gt;</code></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection
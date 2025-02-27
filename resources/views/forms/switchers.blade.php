@extends('layout.master')

@section('content')
<div class="content-body">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Form <span>/ Switchers</span></h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">

        <!--Custom Switcher Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Custom Switcher 1</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <div class="col-12 mb-20">
                            <h6 class="mb-15">Switcher 1</h6>
                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-switch"><input type="checkbox"> <i class="lever"></i> <span class="text">Switch 1</span></label>
                                <label class="adomx-switch"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Switch 1 Active</span></label>
                                <label class="adomx-switch"><input type="checkbox" disabled> <i class="lever"></i> <span class="text">Switch 1 Disabled</span></label>
                            </div>
                        </div>

                        <div class="col-12 mb-20">
                            <h6 class="mb-15">Switcher 1 Color Variation</h6>
                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-switch primary"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Primary</span></label>
                                <label class="adomx-switch secondary"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Secondary</span></label>
                                <label class="adomx-switch success"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Success</span></label>
                                <label class="adomx-switch danger"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Danger</span></label>
                                <label class="adomx-switch warning"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Warning</span></label>
                                <label class="adomx-switch info"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Info</span></label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Custom Switcher End-->

        <!--Custom Switcher Start-->
        <div class="col-lg-6 col-12 mb-30">
            <div class="box">
                <div class="box-head">
                    <h3 class="title">Custom Switcher 2</h3>
                </div>
                <div class="box-body">
                    <div class="row mbn-20">

                        <div class="col-12 mb-20">
                            <h6 class="mb-15">Switcher 2</h6>
                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-switch-2"><input type="checkbox"> <i class="lever"></i> <span class="text">Switch 2</span></label>
                                <label class="adomx-switch-2"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Switch 2 Active</span></label>
                                <label class="adomx-switch-2"><input type="checkbox" disabled> <i class="lever"></i> <span class="text">Switch 2 Disabled</span></label>
                            </div>
                        </div>

                        <div class="col-12 mb-20">
                            <h6 class="mb-15">Switcher 2 Color Variation</h6>
                            <div class="adomx-checkbox-radio-group inline">
                                <label class="adomx-switch-2 primary"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Primary</span></label>
                                <label class="adomx-switch-2 secondary"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Secondary</span></label>
                                <label class="adomx-switch-2 success"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Success</span></label>
                                <label class="adomx-switch-2 danger"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Danger</span></label>
                                <label class="adomx-switch-2 warning"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Warning</span></label>
                                <label class="adomx-switch-2 info"><input type="checkbox" checked> <i class="lever"></i> <span class="text">Info</span></label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Custom Switcher End-->

        <!--How To Use Start-->
        <div class="col-12">
            <div class="box">
                <div class="box-head">
                    <h4 class="title">How To Use</h4>
                </div>
                <div class="box-body">
                    <h6>Basic Use HTML</h6>
                    <code>&lt;div class="adomx-checkbox-radio-group"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&lt;label class="adomx-switch"&gt;&lt;input type="checkbox"&gt; &lt;i class="lever"&gt;&lt;/i&gt; &lt;span class="text"&gt;Switch 1&lt;/span&gt;&lt;/label&gt;<br />&lt;/div&gt;</code>
                    <p class="mt-15">This is the common markup for Adomx custom switch. To use switch 2 just change <code>&lt;label class="adomx-switch"&gt;</code> to <code>&lt;label class="adomx-switch-2"&gt;</code>. For color variation just add the color class like for secondary color <code>&lt;label class="adomx-switch secondary"&gt;</code> and for inline radio add <code>inline</code> class to <code>&lt;div class="adomx-checkbox-radio-group"&gt;</code></p>
                </div>
            </div>
        </div>
        <!--How To Use End-->

    </div>

</div>
@endsection